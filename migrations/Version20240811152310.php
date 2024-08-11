<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811152310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prestationdevis (id INT AUTO_INCREMENT NOT NULL, id_devis_id INT DEFAULT NULL, mission_prestation_id INT DEFAULT NULL, profile_prestation_id INT DEFAULT NULL, mission VARCHAR(255) NOT NULL, uniforme VARCHAR(255) DEFAULT NULL, deb_forfait VARCHAR(255) DEFAULT NULL, accessoire VARCHAR(255) DEFAULT NULL, observation VARCHAR(255) DEFAULT NULL, date DATE NOT NULL, effectif INT NOT NULL, id_profile INT DEFAULT NULL, nb_repas INT DEFAULT NULL, xtra INT DEFAULT NULL, total_repas NUMERIC(10, 2) DEFAULT NULL, profile VARCHAR(255) NOT NULL, heure_travaille VARCHAR(255) DEFAULT NULL, heure_d VARCHAR(255) NOT NULL, heure_f VARCHAR(255) NOT NULL, total_psans_b NUMERIC(10, 2) DEFAULT NULL, total_p NUMERIC(10, 2) NOT NULL, total_brut NUMERIC(10, 2) NOT NULL, int_brut NUMERIC(10, 2) NOT NULL, tarif_prestation NUMERIC(10, 2) NOT NULL, tarif_prestation_sans_b NUMERIC(10, 2) DEFAULT NULL, grilles VARCHAR(255) NOT NULL, grille_client VARCHAR(255) NOT NULL, grille_surnom VARCHAR(255) NOT NULL, INDEX IDX_8AB6938C1105164F (id_devis_id), INDEX IDX_8AB6938C4F29C8E8 (mission_prestation_id), INDEX IDX_8AB6938CB0466094 (profile_prestation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prestationdevis ADD CONSTRAINT FK_8AB6938C1105164F FOREIGN KEY (id_devis_id) REFERENCES devis (id)');
        $this->addSql('ALTER TABLE prestationdevis ADD CONSTRAINT FK_8AB6938C4F29C8E8 FOREIGN KEY (mission_prestation_id) REFERENCES mission (id)');
        $this->addSql('ALTER TABLE prestationdevis ADD CONSTRAINT FK_8AB6938CB0466094 FOREIGN KEY (profile_prestation_id) REFERENCES profile (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestationdevis DROP FOREIGN KEY FK_8AB6938C1105164F');
        $this->addSql('ALTER TABLE prestationdevis DROP FOREIGN KEY FK_8AB6938C4F29C8E8');
        $this->addSql('ALTER TABLE prestationdevis DROP FOREIGN KEY FK_8AB6938CB0466094');
        $this->addSql('DROP TABLE prestationdevis');
    }
}
