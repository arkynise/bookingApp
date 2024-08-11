<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811151556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE frais (id INT AUTO_INCREMENT NOT NULL, id_devis_id INT DEFAULT NULL, frais_lignes_id INT DEFAULT NULL, nom_frais VARCHAR(255) NOT NULL, qte INT NOT NULL, prix NUMERIC(10, 2) NOT NULL, total NUMERIC(10, 2) NOT NULL, observation VARCHAR(255) DEFAULT NULL, INDEX IDX_25404C981105164F (id_devis_id), INDEX IDX_25404C984D136767 (frais_lignes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fraisligne (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, prix NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE frais ADD CONSTRAINT FK_25404C981105164F FOREIGN KEY (id_devis_id) REFERENCES devis (id)');
        $this->addSql('ALTER TABLE frais ADD CONSTRAINT FK_25404C984D136767 FOREIGN KEY (frais_lignes_id) REFERENCES fraisligne (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frais DROP FOREIGN KEY FK_25404C981105164F');
        $this->addSql('ALTER TABLE frais DROP FOREIGN KEY FK_25404C984D136767');
        $this->addSql('DROP TABLE frais');
        $this->addSql('DROP TABLE fraisligne');
    }
}
