<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811150937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dasprofession (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, dept_code VARCHAR(255) DEFAULT NULL, dept_nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grille1 (id INT AUTO_INCREMENT NOT NULL, heure_db VARCHAR(255) NOT NULL, heure_fin VARCHAR(255) NOT NULL, repas INT NOT NULL, heure_travaille VARCHAR(255) NOT NULL, int_brut NUMERIC(10, 2) NOT NULL, tarif NUMERIC(10, 2) NOT NULL, tarif1 NUMERIC(10, 2) NOT NULL, tarif2 NUMERIC(10, 2) NOT NULL, tarif3 NUMERIC(10, 2) NOT NULL, tarif4 NUMERIC(10, 2) NOT NULL, tarif5 NUMERIC(10, 2) NOT NULL, tarif6 NUMERIC(10, 2) NOT NULL, tarif7 NUMERIC(10, 2) NOT NULL, tarif8 NUMERIC(10, 2) NOT NULL, tarif9 NUMERIC(10, 2) NOT NULL, tarif10 NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, update_at DATETIME DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, path VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, INDEX IDX_C53D045F9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infogrille (id INT AUTO_INCREMENT NOT NULL, nom_grille VARCHAR(255) DEFAULT NULL, surnom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notifiable (id INT AUTO_INCREMENT NOT NULL, notifiable VARCHAR(255) DEFAULT NULL, class VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notifiableentity (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) DEFAULT NULL, class VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salarietest (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tva (id INT AUTO_INCREMENT NOT NULL, taux_tva DOUBLE PRECISION NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F9D86650F FOREIGN KEY (user_id_id) REFERENCES salarietest (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F9D86650F');
        $this->addSql('DROP TABLE dasprofession');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE grille1');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE infogrille');
        $this->addSql('DROP TABLE notifiable');
        $this->addSql('DROP TABLE notifiableentity');
        $this->addSql('DROP TABLE salarietest');
        $this->addSql('DROP TABLE tva');
    }
}
