<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808142905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE catalogueexperience (id INT AUTO_INCREMENT NOT NULL, id_cat_sal_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_4FAC30D4B5BB10A (id_cat_sal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cataloguesalarie (id INT AUTO_INCREMENT NOT NULL, id_sal_id INT DEFAULT NULL, note_client SMALLINT DEFAULT NULL, obs_client VARCHAR(255) DEFAULT NULL, modif_sal SMALLINT DEFAULT NULL, age INT DEFAULT NULL, taille INT DEFAULT NULL, permis_b SMALLINT DEFAULT NULL, taille_veste VARCHAR(255) DEFAULT NULL, taille_pantalon VARCHAR(255) DEFAULT NULL, pointure VARCHAR(255) DEFAULT NULL, lv_un VARCHAR(255) DEFAULT NULL, lv_deux VARCHAR(255) DEFAULT NULL, lv_trois VARCHAR(255) DEFAULT NULL, lv_quatre VARCHAR(255) DEFAULT NULL, formation LONGTEXT DEFAULT NULL, back_modify SMALLINT DEFAULT NULL, INDEX IDX_C7C342F156E16145 (id_sal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE catalogueexperience ADD CONSTRAINT FK_4FAC30D4B5BB10A FOREIGN KEY (id_cat_sal_id) REFERENCES cataloguesalarie (id)');
        $this->addSql('ALTER TABLE cataloguesalarie ADD CONSTRAINT FK_C7C342F156E16145 FOREIGN KEY (id_sal_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE catalogueexperience DROP FOREIGN KEY FK_4FAC30D4B5BB10A');
        $this->addSql('ALTER TABLE cataloguesalarie DROP FOREIGN KEY FK_C7C342F156E16145');
        $this->addSql('DROP TABLE catalogueexperience');
        $this->addSql('DROP TABLE cataloguesalarie');
    }
}
