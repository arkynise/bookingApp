<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812095437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brouillard (id INT AUTO_INCREMENT NOT NULL, id_event_id INT DEFAULT NULL, id_devis INT DEFAULT NULL, ndevis VARCHAR(255) DEFAULT NULL, nfact VARCHAR(255) DEFAULT NULL, client VARCHAR(255) DEFAULT NULL, client_fact VARCHAR(255) DEFAULT NULL, contact_fact VARCHAR(255) DEFAULT NULL, gsm_fact VARCHAR(255) DEFAULT NULL, tel_fact VARCHAR(255) DEFAULT NULL, mail_fact VARCHAR(255) DEFAULT NULL, contact_com VARCHAR(255) DEFAULT NULL, gsm_com VARCHAR(255) DEFAULT NULL, tel_com VARCHAR(255) DEFAULT NULL, mail_com VARCHAR(255) DEFAULT NULL, contact_ordre VARCHAR(255) DEFAULT NULL, gsm_ordre VARCHAR(255) DEFAULT NULL, tel_ordre VARCHAR(255) DEFAULT NULL, mail_ordre VARCHAR(255) DEFAULT NULL, adr_com VARCHAR(255) DEFAULT NULL, adr_fact VARCHAR(255) DEFAULT NULL, operation VARCHAR(255) DEFAULT NULL, marque VARCHAR(255) DEFAULT NULL, obs VARCHAR(255) DEFAULT NULL, nfact_acompte VARCHAR(255) DEFAULT NULL, grille_devis VARCHAR(255) DEFAULT NULL, grille_surnom_devis VARCHAR(255) DEFAULT NULL, grille_fact VARCHAR(255) DEFAULT NULL, grille_surnom_fact VARCHAR(255) DEFAULT NULL, id_user_write VARCHAR(255) DEFAULT NULL, id_user_modification INT DEFAULT NULL, id_client_fact INT DEFAULT NULL, id_contact_fact INT DEFAULT NULL, id_adresse_fact INT DEFAULT NULL, nb_hsj INT DEFAULT NULL, nb_hsn INT DEFAULT NULL, condition_paie INT DEFAULT NULL, statut VARCHAR(255) DEFAULT NULL, user_write VARCHAR(255) DEFAULT NULL, date_modification DATETIME DEFAULT NULL, date_creation DATETIME DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, montant_global NUMERIC(2, 2) DEFAULT NULL, presta_etsup NUMERIC(10, 2) DEFAULT NULL, heure_vendu VARCHAR(255) DEFAULT NULL, total_staff_plus NUMERIC(10, 2) DEFAULT NULL, hsj NUMERIC(10, 2) DEFAULT NULL, hsn NUMERIC(10, 2) DEFAULT NULL, hsup_fact NUMERIC(10, 2) DEFAULT NULL, total_taxi NUMERIC(10, 2) DEFAULT NULL, total_frais_km NUMERIC(10, 2) DEFAULT NULL, total_frais_divers NUMERIC(10, 2) DEFAULT NULL, total_frais NUMERIC(10, 2) DEFAULT NULL, total_primes NUMERIC(10, 2) DEFAULT NULL, total_frais_devis NUMERIC(10, 2) DEFAULT NULL, total_prest_sup NUMERIC(10, 2) DEFAULT NULL, total_prest_devis NUMERIC(10, 2) DEFAULT NULL, total_devis NUMERIC(10, 2) DEFAULT NULL, coef_devis NUMERIC(10, 2) DEFAULT NULL, coef_fact NUMERIC(10, 2) DEFAULT NULL, masse_sal_devis NUMERIC(10, 2) DEFAULT NULL, masse_sal_fact NUMERIC(10, 2) DEFAULT NULL, boost_devis NUMERIC(10, 2) DEFAULT NULL, remise_devis NUMERIC(10, 2) DEFAULT NULL, remise_fact NUMERIC(10, 2) DEFAULT NULL, remise_a NUMERIC(10, 2) DEFAULT NULL, remise_p NUMERIC(10, 2) DEFAULT NULL, obs_remise VARCHAR(255) DEFAULT NULL, groupe VARCHAR(255) DEFAULT NULL, montant_acompte NUMERIC(10, 2) DEFAULT NULL, montant_acompte_recue NUMERIC(10, 2) DEFAULT NULL, mois_br DATE DEFAULT NULL, INDEX IDX_435C89B4212C041E (id_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE brouillard ADD CONSTRAINT FK_435C89B4212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillard DROP FOREIGN KEY FK_435C89B4212C041E');
        $this->addSql('DROP TABLE brouillard');
    }
}
