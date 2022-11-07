<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221106194734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE instrument DROP CONSTRAINT fk_3cbf69ddba02f06c');
        $this->addSql('DROP INDEX idx_3cbf69ddba02f06c');
        $this->addSql('ALTER TABLE instrument DROP set_list_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE instrument ADD set_list_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT fk_3cbf69ddba02f06c FOREIGN KEY (set_list_id) REFERENCES set_list (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_3cbf69ddba02f06c ON instrument (set_list_id)');
    }
}
