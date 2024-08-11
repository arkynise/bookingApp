<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811100204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE newnotification (salarie_id INT NOT NULL, idSalarie VARCHAR(255) NOT NULL, new_missions_proposes TINYINT(1) DEFAULT NULL, new_events_aconfirmer TINYINT(1) DEFAULT NULL, new_events_liste TINYINT(1) DEFAULT NULL, new_event_modified TINYINT(1) DEFAULT NULL, new_contrat_non_signe TINYINT(1) DEFAULT NULL, new_mission_longue TINYINT(1) DEFAULT NULL, new_fashion_news TINYINT(1) DEFAULT NULL, PRIMARY KEY(salarie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE newnotification ADD CONSTRAINT FK_73E6754C5859934A FOREIGN KEY (salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE newnotification DROP FOREIGN KEY FK_73E6754C5859934A');
        $this->addSql('DROP TABLE newnotification');
    }
}
