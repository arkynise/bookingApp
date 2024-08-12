<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812092857 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence ADD AdrNum VARCHAR(255) NOT NULL, ADD AdrVille VARCHAR(255) NOT NULL, ADD AdrCodepostal VARCHAR(255) NOT NULL, ADD AuthNom VARCHAR(255) NOT NULL, ADD AuthPrenom VARCHAR(255) NOT NULL, ADD AuthPasword VARCHAR(255) NOT NULL, ADD NomEntite VARCHAR(255) NOT NULL, DROP adr_num, DROP adr_ville, DROP adr_codepostal, DROP auth_nom, DROP auth_prenom, DROP auth_pasword, DROP nom_entite');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence ADD adr_num VARCHAR(255) NOT NULL, ADD adr_ville VARCHAR(255) NOT NULL, ADD adr_codepostal VARCHAR(255) NOT NULL, ADD auth_nom VARCHAR(255) NOT NULL, ADD auth_prenom VARCHAR(255) NOT NULL, ADD auth_pasword VARCHAR(255) NOT NULL, ADD nom_entite VARCHAR(255) NOT NULL, DROP AdrNum, DROP AdrVille, DROP AdrCodepostal, DROP AuthNom, DROP AuthPrenom, DROP AuthPasword, DROP NomEntite');
    }
}
