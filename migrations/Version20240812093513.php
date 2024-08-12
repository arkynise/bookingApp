<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812093513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avisnotation DROP FOREIGN KEY FK_5D23CDEE764B9DFA');
        $this->addSql('DROP INDEX IDX_5D23CDEE764B9DFA ON avisnotation');
        $this->addSql('ALTER TABLE avisnotation CHANGE IdCandidat IdCandidat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avisnotation ADD CONSTRAINT FK_5D23CDEEFBF35F0F FOREIGN KEY (IdCandidat_id) REFERENCES salarie (id)');
        $this->addSql('CREATE INDEX IDX_5D23CDEEFBF35F0F ON avisnotation (IdCandidat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avisnotation DROP FOREIGN KEY FK_5D23CDEEFBF35F0F');
        $this->addSql('DROP INDEX IDX_5D23CDEEFBF35F0F ON avisnotation');
        $this->addSql('ALTER TABLE avisnotation CHANGE IdCandidat_id IdCandidat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avisnotation ADD CONSTRAINT FK_5D23CDEE764B9DFA FOREIGN KEY (IdCandidat) REFERENCES salarie (id)');
        $this->addSql('CREATE INDEX IDX_5D23CDEE764B9DFA ON avisnotation (IdCandidat)');
    }
}
