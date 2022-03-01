<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301114113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A251E27F6BF');
        $this->addSql('CREATE TABLE email (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE answer');
        $this->addSql('DROP TABLE question');
        $this->addSql('ALTER TABLE conversation_thread ADD email VARCHAR(255) NOT NULL, ADD email2 VARCHAR(255) NOT NULL, ADD chateph TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE messages ADD sens TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE post ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE post_category DROP FOREIGN KEY FK_B9A19060A76ED395');
        $this->addSql('DROP INDEX IDX_B9A19060A76ED395 ON post_category');
        $this->addSql('ALTER TABLE post_category DROP user_id');
        $this->addSql('ALTER TABLE service_request ADD requester_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service_request ADD CONSTRAINT FK_F413DD03ED442CF4 FOREIGN KEY (requester_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_F413DD03ED442CF4 ON service_request (requester_id)');
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL, ADD avatar_name VARCHAR(255) DEFAULT NULL, ADD avatar_original_name VARCHAR(255) DEFAULT NULL, ADD avatar_mime_type VARCHAR(255) DEFAULT NULL, ADD avatar_size INT DEFAULT NULL, ADD avatar_dimensions LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE phonenumber phone_number VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE answer (id INT AUTO_INCREMENT NOT NULL, question_id INT DEFAULT NULL, content LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_DADD4A251E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, body LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A251E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('DROP TABLE email');
        $this->addSql('ALTER TABLE conversation_thread DROP email, DROP email2, DROP chateph');
        $this->addSql('ALTER TABLE messages DROP sens');
        $this->addSql('ALTER TABLE post DROP image');
        $this->addSql('ALTER TABLE post_category ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post_category ADD CONSTRAINT FK_B9A19060A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B9A19060A76ED395 ON post_category (user_id)');
        $this->addSql('ALTER TABLE service_request DROP FOREIGN KEY FK_F413DD03ED442CF4');
        $this->addSql('DROP INDEX IDX_F413DD03ED442CF4 ON service_request');
        $this->addSql('ALTER TABLE service_request DROP requester_id');
        $this->addSql('ALTER TABLE `user` ADD phonenumber VARCHAR(255) DEFAULT NULL, DROP phone_number, DROP is_verified, DROP avatar_name, DROP avatar_original_name, DROP avatar_mime_type, DROP avatar_size, DROP avatar_dimensions');
    }
}
