<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808142151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avisnotation (id INT AUTO_INCREMENT NOT NULL, id_candidat_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, avis SMALLINT DEFAULT NULL, id_user_write INT DEFAULT NULL, id_bu INT DEFAULT NULL, bu_libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_5D23CDEE10C22675 (id_candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avisnotation ADD CONSTRAINT FK_5D23CDEE10C22675 FOREIGN KEY (id_candidat_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avisnotation DROP FOREIGN KEY FK_5D23CDEE10C22675');
        $this->addSql('DROP TABLE avisnotation');
    }
}
