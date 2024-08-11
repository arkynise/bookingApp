<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811122351 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE imagepubentreprise (id INT AUTO_INCREMENT NOT NULL, id_pub_entreprise_id INT DEFAULT NULL, path VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, update_at DATETIME DEFAULT NULL, INDEX IDX_BFD66BC8C9AE5BA7 (id_pub_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panierpubentreprise (id INT AUTO_INCREMENT NOT NULL, id_pub_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_E62A8126A5CA559A (id_pub_id), INDEX IDX_E62A8126FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pubentreprise (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, img_pub_entreprise_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, info_date VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, homme TINYINT(1) DEFAULT NULL, femme TINYINT(1) DEFAULT NULL, info_appelle VARCHAR(255) DEFAULT NULL, debut_pub DATE DEFAULT NULL, fin_pub DATE DEFAULT NULL, description_pub LONGTEXT DEFAULT NULL, qualification LONGTEXT DEFAULT NULL, client VARCHAR(255) DEFAULT NULL, mission VARCHAR(255) DEFAULT NULL, heure_fin TIME DEFAULT NULL, heure_dbt TIME DEFAULT NULL, info_heure VARCHAR(255) DEFAULT NULL, prix VARCHAR(255) DEFAULT NULL, info_prix VARCHAR(255) DEFAULT NULL, langue VARCHAR(255) DEFAULT NULL, prime VARCHAR(255) DEFAULT NULL, avantage VARCHAR(255) DEFAULT NULL, autre VARCHAR(255) DEFAULT NULL, publier TINYINT(1) DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_EF42710D7A45358C (groupe_id), UNIQUE INDEX UNIQ_EF42710DB3C58A90 (img_pub_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE retourpubentreprise (id INT AUTO_INCREMENT NOT NULL, id_pub_entreprise_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, date_reponse DATETIME DEFAULT NULL, rep_sal TINYINT(1) DEFAULT NULL, INDEX IDX_ABB8E05EC9AE5BA7 (id_pub_entreprise_id), INDEX IDX_ABB8E05EFDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE imagepubentreprise ADD CONSTRAINT FK_BFD66BC8C9AE5BA7 FOREIGN KEY (id_pub_entreprise_id) REFERENCES pubentreprise (id)');
        $this->addSql('ALTER TABLE panierpubentreprise ADD CONSTRAINT FK_E62A8126A5CA559A FOREIGN KEY (id_pub_id) REFERENCES pubentreprise (id)');
        $this->addSql('ALTER TABLE panierpubentreprise ADD CONSTRAINT FK_E62A8126FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE pubentreprise ADD CONSTRAINT FK_EF42710D7A45358C FOREIGN KEY (groupe_id) REFERENCES groupeuser (id)');
        $this->addSql('ALTER TABLE pubentreprise ADD CONSTRAINT FK_EF42710DB3C58A90 FOREIGN KEY (img_pub_entreprise_id) REFERENCES imagepubentreprise (id)');
        $this->addSql('ALTER TABLE retourpubentreprise ADD CONSTRAINT FK_ABB8E05EC9AE5BA7 FOREIGN KEY (id_pub_entreprise_id) REFERENCES pubentreprise (id)');
        $this->addSql('ALTER TABLE retourpubentreprise ADD CONSTRAINT FK_ABB8E05EFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imagepubentreprise DROP FOREIGN KEY FK_BFD66BC8C9AE5BA7');
        $this->addSql('ALTER TABLE panierpubentreprise DROP FOREIGN KEY FK_E62A8126A5CA559A');
        $this->addSql('ALTER TABLE panierpubentreprise DROP FOREIGN KEY FK_E62A8126FDD3139D');
        $this->addSql('ALTER TABLE pubentreprise DROP FOREIGN KEY FK_EF42710D7A45358C');
        $this->addSql('ALTER TABLE pubentreprise DROP FOREIGN KEY FK_EF42710DB3C58A90');
        $this->addSql('ALTER TABLE retourpubentreprise DROP FOREIGN KEY FK_ABB8E05EC9AE5BA7');
        $this->addSql('ALTER TABLE retourpubentreprise DROP FOREIGN KEY FK_ABB8E05EFDD3139D');
        $this->addSql('DROP TABLE imagepubentreprise');
        $this->addSql('DROP TABLE panierpubentreprise');
        $this->addSql('DROP TABLE pubentreprise');
        $this->addSql('DROP TABLE retourpubentreprise');
    }
}
