<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811152646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE infoapi (id INT AUTO_INCREMENT NOT NULL, img_accueil_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, num_version VARCHAR(255) DEFAULT NULL, msg_mineur VARCHAR(255) DEFAULT NULL, msg_majeur VARCHAR(255) DEFAULT NULL, enable TINYINT(1) DEFAULT NULL, reload_app_changed TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_96CFDCC792774A5C (img_accueil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE infoapi ADD CONSTRAINT FK_96CFDCC792774A5C FOREIGN KEY (img_accueil_id) REFERENCES media (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE infoapi DROP FOREIGN KEY FK_96CFDCC792774A5C');
        $this->addSql('DROP TABLE infoapi');
    }
}
