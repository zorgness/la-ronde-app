<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221106192624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE set_list DROP CONSTRAINT fk_d10f1a91cf11d9c');
        $this->addSql('DROP INDEX idx_d10f1a91cf11d9c');
        $this->addSql('ALTER TABLE set_list DROP instrument_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE set_list ADD instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE set_list ADD CONSTRAINT fk_d10f1a91cf11d9c FOREIGN KEY (instrument_id) REFERENCES instrument (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_d10f1a91cf11d9c ON set_list (instrument_id)');
    }
}
