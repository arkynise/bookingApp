<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811101830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE imagemsdispo (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, update_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE missiondispo (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, img_dsp_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, info_date VARCHAR(255) DEFAULT NULL, info_event VARCHAR(255) DEFAULT NULL, debut_pub DATETIME DEFAULT NULL, fin_pub DATE DEFAULT NULL, font_blanc TINYINT(1) DEFAULT NULL, publier TINYINT(1) DEFAULT NULL, statut VARCHAR(255) DEFAULT NULL, titre_pop VARCHAR(255) DEFAULT NULL, msg_pop VARCHAR(255) DEFAULT NULL, INDEX IDX_3C5C913B7A45358C (groupe_id), INDEX IDX_3C5C913BB3CF7A2E (img_dsp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE missiondispo ADD CONSTRAINT FK_3C5C913B7A45358C FOREIGN KEY (groupe_id) REFERENCES groupeuser (id)');
        $this->addSql('ALTER TABLE missiondispo ADD CONSTRAINT FK_3C5C913BB3CF7A2E FOREIGN KEY (img_dsp_id) REFERENCES imagemsdispo (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE missiondispo DROP FOREIGN KEY FK_3C5C913B7A45358C');
        $this->addSql('ALTER TABLE missiondispo DROP FOREIGN KEY FK_3C5C913BB3CF7A2E');
        $this->addSql('DROP TABLE imagemsdispo');
        $this->addSql('DROP TABLE missiondispo');
    }
}
