<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812101954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillardprestation ADD NaturePrest INT DEFAULT NULL, ADD idBrouillard INT DEFAULT NULL, ADD heureD VARCHAR(255) DEFAULT NULL, ADD heureF VARCHAR(255) DEFAULT NULL, ADD heureTravaille VARCHAR(255) DEFAULT NULL, ADD profileId INT DEFAULT NULL, ADD SalarieId VARCHAR(255) DEFAULT NULL, ADD SalarieInfo VARCHAR(255) DEFAULT NULL, ADD SalBrut NUMERIC(10, 2) DEFAULT NULL, ADD ForfaitVendu NUMERIC(10, 2) DEFAULT NULL, ADD ForfaitDiversRm NUMERIC(10, 2) DEFAULT NULL, ADD ForfaitDiversFact NUMERIC(10, 2) DEFAULT NULL, ADD TaxiR NUMERIC(10, 2) DEFAULT NULL, ADD TaxiF NUMERIC(10, 2) DEFAULT NULL, ADD QteJP VARCHAR(255) DEFAULT NULL, ADD MontantJP NUMERIC(10, 2) DEFAULT NULL, ADD QteJF VARCHAR(255) DEFAULT NULL, ADD MontantJF NUMERIC(10, 2) DEFAULT NULL, ADD QteNP VARCHAR(255) DEFAULT NULL, ADD MontantNP NUMERIC(10, 2) DEFAULT NULL, ADD QteNF VARCHAR(255) DEFAULT NULL, ADD MontantNF NUMERIC(10, 2) DEFAULT NULL, ADD grilleClient VARCHAR(255) DEFAULT NULL, ADD grilleSurnom VARCHAR(255) DEFAULT NULL, DROP nature_prest, DROP id_brouillard, DROP heure_d, DROP heure_f, DROP heure_travaille, DROP profile_id, DROP salarie_id, DROP salarie_info, DROP sal_brut, DROP forfait_vendu, DROP forfait_divers_rm, DROP forfait_divers_fact, DROP taxi_r, DROP taxi_f, DROP qte_jp, DROP montant_jp, DROP qte_jf, DROP montant_jf, DROP qte_np, DROP montant_np, DROP qte_nf, DROP montant_nf, DROP grille_client, DROP grille_surnom, CHANGE date_creation dateCreation DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillardprestation ADD nature_prest INT DEFAULT NULL, ADD id_brouillard INT DEFAULT NULL, ADD heure_d VARCHAR(255) DEFAULT NULL, ADD heure_f VARCHAR(255) DEFAULT NULL, ADD heure_travaille VARCHAR(255) DEFAULT NULL, ADD profile_id INT DEFAULT NULL, ADD salarie_id VARCHAR(255) DEFAULT NULL, ADD salarie_info VARCHAR(255) DEFAULT NULL, ADD sal_brut NUMERIC(10, 2) DEFAULT NULL, ADD forfait_vendu NUMERIC(10, 2) DEFAULT NULL, ADD forfait_divers_rm NUMERIC(10, 2) DEFAULT NULL, ADD forfait_divers_fact NUMERIC(10, 2) DEFAULT NULL, ADD taxi_r NUMERIC(10, 2) DEFAULT NULL, ADD taxi_f NUMERIC(10, 2) DEFAULT NULL, ADD qte_jp VARCHAR(255) DEFAULT NULL, ADD montant_jp NUMERIC(10, 2) DEFAULT NULL, ADD qte_jf VARCHAR(255) DEFAULT NULL, ADD montant_jf NUMERIC(10, 2) DEFAULT NULL, ADD qte_np VARCHAR(255) DEFAULT NULL, ADD montant_np NUMERIC(10, 2) DEFAULT NULL, ADD qte_nf VARCHAR(255) DEFAULT NULL, ADD montant_nf NUMERIC(10, 2) DEFAULT NULL, ADD grille_client VARCHAR(255) DEFAULT NULL, ADD grille_surnom VARCHAR(255) DEFAULT NULL, DROP NaturePrest, DROP idBrouillard, DROP heureD, DROP heureF, DROP heureTravaille, DROP profileId, DROP SalarieId, DROP SalarieInfo, DROP SalBrut, DROP ForfaitVendu, DROP ForfaitDiversRm, DROP ForfaitDiversFact, DROP TaxiR, DROP TaxiF, DROP QteJP, DROP MontantJP, DROP QteJF, DROP MontantJF, DROP QteNP, DROP MontantNP, DROP QteNF, DROP MontantNF, DROP grilleClient, DROP grilleSurnom, CHANGE dateCreation date_creation DATE DEFAULT NULL');
    }
}
