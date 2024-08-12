<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812093406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avisnotation DROP FOREIGN KEY FK_5D23CDEE10C22675');
        $this->addSql('DROP INDEX IDX_5D23CDEE10C22675 ON avisnotation');
        $this->addSql('ALTER TABLE avisnotation ADD IdUserWrite INT DEFAULT NULL, ADD IdBu INT DEFAULT NULL, ADD IdCandidat INT DEFAULT NULL, DROP id_candidat_id, DROP id_user_write, DROP id_bu, CHANGE date_creation dateCreation DATETIME DEFAULT NULL, CHANGE bu_libelle BuLibelle VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE avisnotation ADD CONSTRAINT FK_5D23CDEE764B9DFA FOREIGN KEY (IdCandidat) REFERENCES salarie (id)');
        $this->addSql('CREATE INDEX IDX_5D23CDEE764B9DFA ON avisnotation (IdCandidat)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avisnotation DROP FOREIGN KEY FK_5D23CDEE764B9DFA');
        $this->addSql('DROP INDEX IDX_5D23CDEE764B9DFA ON avisnotation');
        $this->addSql('ALTER TABLE avisnotation ADD id_candidat_id INT DEFAULT NULL, ADD id_user_write INT DEFAULT NULL, ADD id_bu INT DEFAULT NULL, DROP IdUserWrite, DROP IdBu, DROP IdCandidat, CHANGE dateCreation date_creation DATETIME DEFAULT NULL, CHANGE BuLibelle bu_libelle VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE avisnotation ADD CONSTRAINT FK_5D23CDEE10C22675 FOREIGN KEY (id_candidat_id) REFERENCES salarie (id)');
        $this->addSql('CREATE INDEX IDX_5D23CDEE10C22675 ON avisnotation (id_candidat_id)');
    }
}
