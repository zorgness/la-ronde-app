<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221103104812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE instrument_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE set_list_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE instrument (id INT NOT NULL, player_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3CBF69DD99E6F5DF ON instrument (player_id)');
        $this->addSql('CREATE TABLE set_list (id INT NOT NULL, owner_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, theme VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D10F1A917E3C61F9 ON set_list (owner_id)');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DD99E6F5DF FOREIGN KEY (player_id) REFERENCES "account" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE set_list ADD CONSTRAINT FK_D10F1A917E3C61F9 FOREIGN KEY (owner_id) REFERENCES "account" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE instrument_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE set_list_id_seq CASCADE');
        $this->addSql('ALTER TABLE instrument DROP CONSTRAINT FK_3CBF69DD99E6F5DF');
        $this->addSql('ALTER TABLE set_list DROP CONSTRAINT FK_D10F1A917E3C61F9');
        $this->addSql('DROP TABLE instrument');
        $this->addSql('DROP TABLE set_list');
    }
}
