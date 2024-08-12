<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812101039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillard DROP FOREIGN KEY FK_435C89B4212C041E');
        $this->addSql('DROP INDEX IDX_435C89B4212C041E ON brouillard');
        $this->addSql('ALTER TABLE brouillard ADD IdDevis INT DEFAULT NULL, ADD ClientFact VARCHAR(255) DEFAULT NULL, ADD ContactFact VARCHAR(255) DEFAULT NULL, ADD GsmFact VARCHAR(255) DEFAULT NULL, ADD TelFact VARCHAR(255) DEFAULT NULL, ADD MailFact VARCHAR(255) DEFAULT NULL, ADD ContactCom VARCHAR(255) DEFAULT NULL, ADD GsmCom VARCHAR(255) DEFAULT NULL, ADD TelCom VARCHAR(255) DEFAULT NULL, ADD MailCom VARCHAR(255) DEFAULT NULL, ADD ContactOrdre VARCHAR(255) DEFAULT NULL, ADD GsmOrdre VARCHAR(255) DEFAULT NULL, ADD TelOrdre VARCHAR(255) DEFAULT NULL, ADD MailOrdre VARCHAR(255) DEFAULT NULL, ADD AdrCom VARCHAR(255) DEFAULT NULL, ADD AdrFact VARCHAR(255) DEFAULT NULL, ADD NFactAcompte VARCHAR(255) DEFAULT NULL, ADD grilleDevis VARCHAR(255) DEFAULT NULL, ADD grilleSurnomDevis VARCHAR(255) DEFAULT NULL, ADD grilleFact VARCHAR(255) DEFAULT NULL, ADD grilleSurnomFact VARCHAR(255) DEFAULT NULL, ADD IdUserWrite VARCHAR(255) DEFAULT NULL, ADD IdUserModification INT DEFAULT NULL, ADD IdClientFact INT DEFAULT NULL, ADD IdContactFact INT DEFAULT NULL, ADD IdAdresseFact INT DEFAULT NULL, ADD NbHsj INT DEFAULT NULL, ADD NbHsn INT DEFAULT NULL, ADD ConditionPaie INT DEFAULT NULL, ADD UserWrite VARCHAR(255) DEFAULT NULL, ADD DateModification DATETIME DEFAULT NULL, ADD dateCreation DATE DEFAULT NULL, ADD DateDebut DATE DEFAULT NULL, ADD DateFin DATE DEFAULT NULL, ADD PrestaETSup NUMERIC(10, 2) DEFAULT NULL, ADD HeureVendu VARCHAR(255) DEFAULT NULL, ADD TotalStaffPlus NUMERIC(10, 2) DEFAULT NULL, ADD HSupFact NUMERIC(10, 2) DEFAULT NULL, ADD TotalTaxi NUMERIC(10, 2) DEFAULT NULL, ADD TotalFraisKm NUMERIC(10, 2) DEFAULT NULL, ADD TotalFraisDivers NUMERIC(10, 2) DEFAULT NULL, ADD TotalFrais NUMERIC(10, 2) DEFAULT NULL, ADD TotalPrimes NUMERIC(10, 2) DEFAULT NULL, ADD TotalFraisDevis NUMERIC(10, 2) DEFAULT NULL, ADD TotalPrestSup NUMERIC(10, 2) DEFAULT NULL, ADD TotalPrestDevis NUMERIC(10, 2) DEFAULT NULL, ADD TotalDevis NUMERIC(10, 2) DEFAULT NULL, ADD CoefDevis NUMERIC(10, 2) DEFAULT NULL, ADD CoefFact NUMERIC(10, 2) DEFAULT NULL, ADD MasseSalDevis NUMERIC(10, 2) DEFAULT NULL, ADD MasseSalFact NUMERIC(10, 2) DEFAULT NULL, ADD BoostDevis NUMERIC(10, 2) DEFAULT NULL, ADD RemiseDevis NUMERIC(10, 2) DEFAULT NULL, ADD RemiseFact NUMERIC(10, 2) DEFAULT NULL, ADD RemiseA NUMERIC(10, 2) DEFAULT NULL, ADD ObsRemise VARCHAR(255) DEFAULT NULL, ADD MontantAcompte NUMERIC(10, 2) DEFAULT NULL, ADD MontantAcompteRecue NUMERIC(10, 2) DEFAULT NULL, ADD moisBr DATE DEFAULT NULL, ADD idEvent INT DEFAULT NULL, DROP id_event_id, DROP id_devis, DROP client_fact, DROP contact_fact, DROP gsm_fact, DROP tel_fact, DROP mail_fact, DROP contact_com, DROP gsm_com, DROP tel_com, DROP mail_com, DROP contact_ordre, DROP gsm_ordre, DROP tel_ordre, DROP mail_ordre, DROP adr_com, DROP adr_fact, DROP nfact_acompte, DROP grille_devis, DROP grille_surnom_devis, DROP grille_fact, DROP grille_surnom_fact, DROP id_user_write, DROP id_user_modification, DROP id_client_fact, DROP id_contact_fact, DROP id_adresse_fact, DROP nb_hsj, DROP nb_hsn, DROP condition_paie, DROP user_write, DROP date_modification, DROP date_creation, DROP date_debut, DROP date_fin, DROP presta_etsup, DROP heure_vendu, DROP total_staff_plus, DROP hsup_fact, DROP total_taxi, DROP total_frais_km, DROP total_frais_divers, DROP total_frais, DROP total_primes, DROP total_frais_devis, DROP total_prest_sup, DROP total_prest_devis, DROP total_devis, DROP coef_devis, DROP coef_fact, DROP masse_sal_devis, DROP masse_sal_fact, DROP boost_devis, DROP remise_devis, DROP remise_fact, DROP remise_a, DROP obs_remise, DROP montant_acompte, DROP montant_acompte_recue, DROP mois_br, CHANGE montant_global MontantGlobal NUMERIC(2, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE brouillard ADD CONSTRAINT FK_435C89B42C6A49BA FOREIGN KEY (idEvent) REFERENCES event (id)');
        $this->addSql('CREATE INDEX IDX_435C89B42C6A49BA ON brouillard (idEvent)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillard DROP FOREIGN KEY FK_435C89B42C6A49BA');
        $this->addSql('DROP INDEX IDX_435C89B42C6A49BA ON brouillard');
        $this->addSql('ALTER TABLE brouillard ADD id_event_id INT DEFAULT NULL, ADD id_devis INT DEFAULT NULL, ADD client_fact VARCHAR(255) DEFAULT NULL, ADD contact_fact VARCHAR(255) DEFAULT NULL, ADD gsm_fact VARCHAR(255) DEFAULT NULL, ADD tel_fact VARCHAR(255) DEFAULT NULL, ADD mail_fact VARCHAR(255) DEFAULT NULL, ADD contact_com VARCHAR(255) DEFAULT NULL, ADD gsm_com VARCHAR(255) DEFAULT NULL, ADD tel_com VARCHAR(255) DEFAULT NULL, ADD mail_com VARCHAR(255) DEFAULT NULL, ADD contact_ordre VARCHAR(255) DEFAULT NULL, ADD gsm_ordre VARCHAR(255) DEFAULT NULL, ADD tel_ordre VARCHAR(255) DEFAULT NULL, ADD mail_ordre VARCHAR(255) DEFAULT NULL, ADD adr_com VARCHAR(255) DEFAULT NULL, ADD adr_fact VARCHAR(255) DEFAULT NULL, ADD nfact_acompte VARCHAR(255) DEFAULT NULL, ADD grille_devis VARCHAR(255) DEFAULT NULL, ADD grille_surnom_devis VARCHAR(255) DEFAULT NULL, ADD grille_fact VARCHAR(255) DEFAULT NULL, ADD grille_surnom_fact VARCHAR(255) DEFAULT NULL, ADD id_user_write VARCHAR(255) DEFAULT NULL, ADD id_user_modification INT DEFAULT NULL, ADD id_client_fact INT DEFAULT NULL, ADD id_contact_fact INT DEFAULT NULL, ADD id_adresse_fact INT DEFAULT NULL, ADD nb_hsj INT DEFAULT NULL, ADD nb_hsn INT DEFAULT NULL, ADD condition_paie INT DEFAULT NULL, ADD user_write VARCHAR(255) DEFAULT NULL, ADD date_creation DATETIME DEFAULT NULL, ADD date_debut DATE DEFAULT NULL, ADD date_fin DATE DEFAULT NULL, ADD presta_etsup NUMERIC(10, 2) DEFAULT NULL, ADD heure_vendu VARCHAR(255) DEFAULT NULL, ADD total_staff_plus NUMERIC(10, 2) DEFAULT NULL, ADD hsup_fact NUMERIC(10, 2) DEFAULT NULL, ADD total_taxi NUMERIC(10, 2) DEFAULT NULL, ADD total_frais_km NUMERIC(10, 2) DEFAULT NULL, ADD total_frais_divers NUMERIC(10, 2) DEFAULT NULL, ADD total_frais NUMERIC(10, 2) DEFAULT NULL, ADD total_primes NUMERIC(10, 2) DEFAULT NULL, ADD total_frais_devis NUMERIC(10, 2) DEFAULT NULL, ADD total_prest_sup NUMERIC(10, 2) DEFAULT NULL, ADD total_prest_devis NUMERIC(10, 2) DEFAULT NULL, ADD total_devis NUMERIC(10, 2) DEFAULT NULL, ADD coef_devis NUMERIC(10, 2) DEFAULT NULL, ADD coef_fact NUMERIC(10, 2) DEFAULT NULL, ADD masse_sal_devis NUMERIC(10, 2) DEFAULT NULL, ADD masse_sal_fact NUMERIC(10, 2) DEFAULT NULL, ADD boost_devis NUMERIC(10, 2) DEFAULT NULL, ADD remise_devis NUMERIC(10, 2) DEFAULT NULL, ADD remise_fact NUMERIC(10, 2) DEFAULT NULL, ADD remise_a NUMERIC(10, 2) DEFAULT NULL, ADD obs_remise VARCHAR(255) DEFAULT NULL, ADD montant_acompte NUMERIC(10, 2) DEFAULT NULL, ADD montant_acompte_recue NUMERIC(10, 2) DEFAULT NULL, ADD mois_br DATE DEFAULT NULL, DROP IdDevis, DROP ClientFact, DROP ContactFact, DROP GsmFact, DROP TelFact, DROP MailFact, DROP ContactCom, DROP GsmCom, DROP TelCom, DROP MailCom, DROP ContactOrdre, DROP GsmOrdre, DROP TelOrdre, DROP MailOrdre, DROP AdrCom, DROP AdrFact, DROP NFactAcompte, DROP grilleDevis, DROP grilleSurnomDevis, DROP grilleFact, DROP grilleSurnomFact, DROP IdUserWrite, DROP IdUserModification, DROP IdClientFact, DROP IdContactFact, DROP IdAdresseFact, DROP NbHsj, DROP NbHsn, DROP ConditionPaie, DROP UserWrite, DROP dateCreation, DROP DateDebut, DROP DateFin, DROP PrestaETSup, DROP HeureVendu, DROP TotalStaffPlus, DROP HSupFact, DROP TotalTaxi, DROP TotalFraisKm, DROP TotalFraisDivers, DROP TotalFrais, DROP TotalPrimes, DROP TotalFraisDevis, DROP TotalPrestSup, DROP TotalPrestDevis, DROP TotalDevis, DROP CoefDevis, DROP CoefFact, DROP MasseSalDevis, DROP MasseSalFact, DROP BoostDevis, DROP RemiseDevis, DROP RemiseFact, DROP RemiseA, DROP ObsRemise, DROP MontantAcompte, DROP MontantAcompteRecue, DROP moisBr, DROP idEvent, CHANGE DateModification date_modification DATETIME DEFAULT NULL, CHANGE MontantGlobal montant_global NUMERIC(2, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE brouillard ADD CONSTRAINT FK_435C89B4212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
        $this->addSql('CREATE INDEX IDX_435C89B4212C041E ON brouillard (id_event_id)');
    }
}
