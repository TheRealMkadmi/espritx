<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220225082433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE call_user (call_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BA12B11550A89B2C (call_id), INDEX IDX_BA12B115A76ED395 (user_id), PRIMARY KEY(call_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE call_user ADD CONSTRAINT FK_BA12B11550A89B2C FOREIGN KEY (call_id) REFERENCES `call` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE call_user ADD CONSTRAINT FK_BA12B115A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE call_user');
    }
}
