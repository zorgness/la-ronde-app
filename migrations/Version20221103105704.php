<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221103105704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE song_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE song (id INT NOT NULL, list_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, creator VARCHAR(255) NOT NULL, interpret VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_33EDEEA13DAE168B ON song (list_id)');
        $this->addSql('ALTER TABLE song ADD CONSTRAINT FK_33EDEEA13DAE168B FOREIGN KEY (list_id) REFERENCES set_list (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE song_id_seq CASCADE');
        $this->addSql('ALTER TABLE song DROP CONSTRAINT FK_33EDEEA13DAE168B');
        $this->addSql('DROP TABLE song');
    }
}
