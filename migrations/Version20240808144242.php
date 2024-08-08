<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808144242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE catalogue (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, img_cat_id INT DEFAULT NULL, id_param_id INT DEFAULT NULL, datecreation DATETIME DEFAULT NULL, date_envoie DATETIME DEFAULT NULL, date_retour DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, id_client INT DEFAULT NULL, client VARCHAR(255) DEFAULT NULL, id_ctc INT DEFAULT NULL, ctc VARCHAR(255) DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, statut INT DEFAULT NULL, token_url VARCHAR(255) DEFAULT NULL, INDEX IDX_59A699F57A45358C (groupe_id), INDEX IDX_59A699F53B881923 (img_cat_id), INDEX IDX_59A699F569C24F6 (id_param_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imagecata (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, update_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parametrecatalogue (id INT AUTO_INCREMENT NOT NULL, img INT DEFAULT NULL, nom_collab SMALLINT DEFAULT NULL, date_entrée SMALLINT DEFAULT NULL, permis SMALLINT DEFAULT NULL, age SMALLINT DEFAULT NULL, taille SMALLINT DEFAULT NULL, taille_pantalon SMALLINT DEFAULT NULL, pointure_veste SMALLINT DEFAULT NULL, pointure SMALLINT DEFAULT NULL, formation SMALLINT DEFAULT NULL, experience SMALLINT DEFAULT NULL, langue SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE catalogue ADD CONSTRAINT FK_59A699F57A45358C FOREIGN KEY (groupe_id) REFERENCES groupeuser (id)');
        $this->addSql('ALTER TABLE catalogue ADD CONSTRAINT FK_59A699F53B881923 FOREIGN KEY (img_cat_id) REFERENCES imagecata (id)');
        $this->addSql('ALTER TABLE catalogue ADD CONSTRAINT FK_59A699F569C24F6 FOREIGN KEY (id_param_id) REFERENCES parametrecatalogue (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE catalogue DROP FOREIGN KEY FK_59A699F57A45358C');
        $this->addSql('ALTER TABLE catalogue DROP FOREIGN KEY FK_59A699F53B881923');
        $this->addSql('ALTER TABLE catalogue DROP FOREIGN KEY FK_59A699F569C24F6');
        $this->addSql('DROP TABLE catalogue');
        $this->addSql('DROP TABLE imagecata');
        $this->addSql('DROP TABLE parametrecatalogue');
    }
}
