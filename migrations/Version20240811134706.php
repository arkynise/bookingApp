<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811134706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE retoururgenceentreprise (id INT AUTO_INCREMENT NOT NULL, id_urgence_entreprise_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, date_reponse DATETIME NOT NULL, rep_sal TINYINT(1) DEFAULT NULL, INDEX IDX_E30D0CA9B66C199 (id_urgence_entreprise_id), INDEX IDX_E30D0CAFDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE urgenceentreprise (id INT AUTO_INCREMENT NOT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, info_date VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, homme TINYINT(1) DEFAULT NULL, femme TINYINT(1) DEFAULT NULL, date_dbt DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, mission VARCHAR(255) DEFAULT NULL, heure_fin TIME DEFAULT NULL, heure_dbt TIME DEFAULT NULL, info_heure VARCHAR(255) DEFAULT NULL, prix VARCHAR(255) DEFAULT NULL, info_prix VARCHAR(255) DEFAULT NULL, actif TINYINT(1) DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, groupe INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE retoururgenceentreprise ADD CONSTRAINT FK_E30D0CA9B66C199 FOREIGN KEY (id_urgence_entreprise_id) REFERENCES urgenceentreprise (id)');
        $this->addSql('ALTER TABLE retoururgenceentreprise ADD CONSTRAINT FK_E30D0CAFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE retoururgenceentreprise DROP FOREIGN KEY FK_E30D0CA9B66C199');
        $this->addSql('ALTER TABLE retoururgenceentreprise DROP FOREIGN KEY FK_E30D0CAFDD3139D');
        $this->addSql('DROP TABLE retoururgenceentreprise');
        $this->addSql('DROP TABLE urgenceentreprise');
    }
}
