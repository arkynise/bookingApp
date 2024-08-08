<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808150753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, id_sal_id INT DEFAULT NULL, id_event_id INT DEFAULT NULL, date_publication DATETIME DEFAULT NULL, date_signtaure DATETIME DEFAULT NULL, total_htrav VARCHAR(255) DEFAULT NULL, path VARCHAR(255) DEFAULT NULL, signer SMALLINT DEFAULT NULL, nb_date INT DEFAULT NULL, nb_repas INT DEFAULT NULL, prix_repas NUMERIC(10, 2) DEFAULT NULL, total_brut NUMERIC(10, 2) DEFAULT NULL, total_repas NUMERIC(10, 2) DEFAULT NULL, taux_horaire NUMERIC(10, 2) DEFAULT NULL, notifications SMALLINT DEFAULT NULL, expirer SMALLINT DEFAULT NULL, INDEX IDX_6034999356E16145 (id_sal_id), INDEX IDX_60349993212C041E (id_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_6034999356E16145 FOREIGN KEY (id_sal_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999356E16145');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_60349993212C041E');
        $this->addSql('DROP TABLE contrat');
    }
}
