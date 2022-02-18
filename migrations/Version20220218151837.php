<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220218151837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post_like (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_653627B84B89032C (post_id), INDEX IDX_653627B8A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B84B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B8A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `group` CHANGE group_type group_type VARCHAR(255) DEFAULT NULL COMMENT \'(DC2Type:grouptype)\'');
        $this->addSql('ALTER TABLE permission CHANGE expression expression VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE service_request CHANGE created_at created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE responded_at responded_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE user CHANGE phonenumber phonenumber VARCHAR(255) DEFAULT NULL, CHANGE class class VARCHAR(255) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE last_activity_at last_activity_at DATETIME DEFAULT NULL, CHANGE confirmation_token confirmation_token VARCHAR(255) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL, CHANGE identity_document_number identity_document_number VARCHAR(8) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post_like');
        $this->addSql('ALTER TABLE `group` CHANGE group_type group_type VARCHAR(255) DEFAULT \'NULL\' COMMENT \'(DC2Type:grouptype)\'');
        $this->addSql('ALTER TABLE permission CHANGE expression expression VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE service_request CHANGE created_at created_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\', CHANGE responded_at responded_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE `user` CHANGE phonenumber phonenumber VARCHAR(255) DEFAULT \'NULL\', CHANGE class class VARCHAR(255) DEFAULT \'NULL\', CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE last_activity_at last_activity_at DATETIME DEFAULT \'NULL\', CHANGE confirmation_token confirmation_token VARCHAR(255) DEFAULT \'NULL\', CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\', CHANGE identity_document_number identity_document_number VARCHAR(8) DEFAULT \'NULL\'');
    }
}
