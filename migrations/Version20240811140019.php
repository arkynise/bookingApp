<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811140019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE popvu (id_salarie_id INT NOT NULL, date_creation DATETIME DEFAULT NULL, date_vu DATETIME DEFAULT NULL, PRIMARY KEY(id_salarie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE popvu ADD CONSTRAINT FK_514EC314FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE popvu DROP FOREIGN KEY FK_514EC314FDD3139D');
        $this->addSql('DROP TABLE popvu');
    }
}
