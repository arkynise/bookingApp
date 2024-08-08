<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808151201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrateffect (id INT AUTO_INCREMENT NOT NULL, id_contrat_id INT DEFAULT NULL, id_affect INT DEFAULT NULL, date_m DATE DEFAULT NULL, debut_m VARCHAR(255) DEFAULT NULL, fin_m VARCHAR(255) DEFAULT NULL, h_trav VARCHAR(255) DEFAULT NULL, profile VARCHAR(255) DEFAULT NULL, id_profile INT DEFAULT NULL, mission VARCHAR(255) DEFAULT NULL, id_mission INT DEFAULT NULL, salaire NUMERIC(10, 2) DEFAULT NULL, repas INT DEFAULT NULL, deb_forfait VARCHAR(255) DEFAULT NULL, h_deb_old VARCHAR(255) DEFAULT NULL, h_fin_old VARCHAR(255) DEFAULT NULL, INDEX IDX_C61A14A8BDA986C8 (id_contrat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrateffect ADD CONSTRAINT FK_C61A14A8BDA986C8 FOREIGN KEY (id_contrat_id) REFERENCES contrat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrateffect DROP FOREIGN KEY FK_C61A14A8BDA986C8');
        $this->addSql('DROP TABLE contrateffect');
    }
}
