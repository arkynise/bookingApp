<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811122815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paniersalarie (id INT AUTO_INCREMENT NOT NULL, id_panier_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, etat VARCHAR(255) DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_CE443F8777482E5B (id_panier_id), INDEX IDX_CE443F87FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paniersalarie ADD CONSTRAINT FK_CE443F8777482E5B FOREIGN KEY (id_panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE paniersalarie ADD CONSTRAINT FK_CE443F87FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paniersalarie DROP FOREIGN KEY FK_CE443F8777482E5B');
        $this->addSql('ALTER TABLE paniersalarie DROP FOREIGN KEY FK_CE443F87FDD3139D');
        $this->addSql('DROP TABLE paniersalarie');
    }
}
