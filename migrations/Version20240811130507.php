<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811130507 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messageprestation (id INT AUTO_INCREMENT NOT NULL, id_prestation_id INT DEFAULT NULL, id_msg_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, INDEX IDX_76ED2886206D1431 (id_prestation_id), INDEX IDX_76ED2886A21C414D (id_msg_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, nom_mission VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panierurgence (id INT AUTO_INCREMENT NOT NULL, id_salarie_id INT DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_3FB76E50FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, profile_prestation_id INT DEFAULT NULL, id_event_id INT DEFAULT NULL, mission_prestation_id INT DEFAULT NULL, mission VARCHAR(255) NOT NULL, id_devis INT DEFAULT NULL, uniforme VARCHAR(255) DEFAULT NULL, deb_forfait VARCHAR(255) DEFAULT NULL, accessoire VARCHAR(255) DEFAULT NULL, observation VARCHAR(255) DEFAULT NULL, date DATE NOT NULL, effectif INT NOT NULL, profile VARCHAR(255) NOT NULL, id_profile INT DEFAULT NULL, nb_repas INT DEFAULT NULL, xtra INT DEFAULT NULL, total_repas NUMERIC(10, 2) DEFAULT NULL, heure_travaille VARCHAR(255) DEFAULT NULL, heure_d VARCHAR(255) NOT NULL, heure_f VARCHAR(255) NOT NULL, total_psans_b NUMERIC(10, 2) DEFAULT NULL, total_p NUMERIC(10, 2) NOT NULL, total_brut NUMERIC(10, 2) NOT NULL, int_brut NUMERIC(10, 2) NOT NULL, tarif_prestation NUMERIC(10, 2) NOT NULL, tarif_prestation_sans_b NUMERIC(10, 2) DEFAULT NULL, grilles VARCHAR(255) DEFAULT NULL, grille_client VARCHAR(255) DEFAULT NULL, id_mission INT DEFAULT NULL, id_prest_devis INT DEFAULT NULL, is_new TINYINT(1) DEFAULT NULL, int_d INT DEFAULT NULL, int_f INT DEFAULT NULL, grille_surnom VARCHAR(255) NOT NULL, INDEX IDX_51C88FADB0466094 (profile_prestation_id), INDEX IDX_51C88FAD212C041E (id_event_id), INDEX IDX_51C88FAD4F29C8E8 (mission_prestation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE messageprestation ADD CONSTRAINT FK_76ED2886206D1431 FOREIGN KEY (id_prestation_id) REFERENCES prestation (id)');
        $this->addSql('ALTER TABLE messageprestation ADD CONSTRAINT FK_76ED2886A21C414D FOREIGN KEY (id_msg_id) REFERENCES message (id)');
        $this->addSql('ALTER TABLE panierurgence ADD CONSTRAINT FK_3FB76E50FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FADB0466094 FOREIGN KEY (profile_prestation_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FAD212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FAD4F29C8E8 FOREIGN KEY (mission_prestation_id) REFERENCES mission (id)');
        $this->addSql('ALTER TABLE diffusionsalprest ADD id_prestation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE diffusionsalprest ADD CONSTRAINT FK_792664E206D1431 FOREIGN KEY (id_prestation_id) REFERENCES prestation (id)');
        $this->addSql('CREATE INDEX IDX_792664E206D1431 ON diffusionsalprest (id_prestation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diffusionsalprest DROP FOREIGN KEY FK_792664E206D1431');
        $this->addSql('ALTER TABLE messageprestation DROP FOREIGN KEY FK_76ED2886206D1431');
        $this->addSql('ALTER TABLE messageprestation DROP FOREIGN KEY FK_76ED2886A21C414D');
        $this->addSql('ALTER TABLE panierurgence DROP FOREIGN KEY FK_3FB76E50FDD3139D');
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FADB0466094');
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FAD212C041E');
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FAD4F29C8E8');
        $this->addSql('DROP TABLE messageprestation');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE panierurgence');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('DROP INDEX IDX_792664E206D1431 ON diffusionsalprest');
        $this->addSql('ALTER TABLE diffusionsalprest DROP id_prestation_id');
    }
}
