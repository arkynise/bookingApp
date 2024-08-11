<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811140935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE talon (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE talonsalarie (id INT AUTO_INCREMENT NOT NULL, id_salarie_id INT DEFAULT NULL, id_talon_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, INDEX IDX_5F41C87AFDD3139D (id_salarie_id), INDEX IDX_5F41C87A168F5868 (id_talon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE talonsalarie ADD CONSTRAINT FK_5F41C87AFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE talonsalarie ADD CONSTRAINT FK_5F41C87A168F5868 FOREIGN KEY (id_talon_id) REFERENCES talon (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE talonsalarie DROP FOREIGN KEY FK_5F41C87AFDD3139D');
        $this->addSql('ALTER TABLE talonsalarie DROP FOREIGN KEY FK_5F41C87A168F5868');
        $this->addSql('DROP TABLE talon');
        $this->addSql('DROP TABLE talonsalarie');
    }
}
