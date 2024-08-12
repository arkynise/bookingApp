<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812101250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillardfrais ADD NatureFrais INT DEFAULT NULL, ADD idBrouillard INT DEFAULT NULL, DROP nature_frais, DROP id_brouillard, CHANGE nom_frais nomFrais VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillardfrais ADD nature_frais INT DEFAULT NULL, ADD id_brouillard INT DEFAULT NULL, DROP NatureFrais, DROP idBrouillard, CHANGE nomFrais nom_frais VARCHAR(255) NOT NULL');
    }
}
