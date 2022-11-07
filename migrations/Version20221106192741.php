<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221106192741 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE instrument ADD set_list_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DDBA02F06C FOREIGN KEY (set_list_id) REFERENCES set_list (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3CBF69DDBA02F06C ON instrument (set_list_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE instrument DROP CONSTRAINT FK_3CBF69DDBA02F06C');
        $this->addSql('DROP INDEX IDX_3CBF69DDBA02F06C');
        $this->addSql('ALTER TABLE instrument DROP set_list_id');
    }
}
