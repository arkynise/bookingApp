<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811105719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE imagepubevent (id INT AUTO_INCREMENT NOT NULL, id_pub_event_id INT DEFAULT NULL, path VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, update_at DATETIME DEFAULT NULL, INDEX IDX_2ECA543F9F07A150 (id_pub_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panierpub (id INT AUTO_INCREMENT NOT NULL, id_salarie_id INT DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_CB786BC9FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pubevent (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, img_pub_event_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, info_date VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, homme TINYINT(1) DEFAULT NULL, femme TINYINT(1) DEFAULT NULL, info_appelle VARCHAR(255) DEFAULT NULL, debut_pub DATETIME DEFAULT NULL, fin_pub DATE DEFAULT NULL, description_pub LONGTEXT DEFAULT NULL, demi_trav TINYINT(1) DEFAULT NULL, jour_trav TINYINT(1) DEFAULT NULL, soirtrav TINYINT(1) DEFAULT NULL, publier TINYINT(1) DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_CF92E29E7A45358C (groupe_id), UNIQUE INDEX UNIQ_CF92E29EB6482A03 (img_pub_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE imagepubevent ADD CONSTRAINT FK_2ECA543F9F07A150 FOREIGN KEY (id_pub_event_id) REFERENCES pubevent (id)');
        $this->addSql('ALTER TABLE panierpub ADD CONSTRAINT FK_CB786BC9FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE pubevent ADD CONSTRAINT FK_CF92E29E7A45358C FOREIGN KEY (groupe_id) REFERENCES groupeuser (id)');
        $this->addSql('ALTER TABLE pubevent ADD CONSTRAINT FK_CF92E29EB6482A03 FOREIGN KEY (img_pub_event_id) REFERENCES imagepubevent (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imagepubevent DROP FOREIGN KEY FK_2ECA543F9F07A150');
        $this->addSql('ALTER TABLE panierpub DROP FOREIGN KEY FK_CB786BC9FDD3139D');
        $this->addSql('ALTER TABLE pubevent DROP FOREIGN KEY FK_CF92E29E7A45358C');
        $this->addSql('ALTER TABLE pubevent DROP FOREIGN KEY FK_CF92E29EB6482A03');
        $this->addSql('DROP TABLE imagepubevent');
        $this->addSql('DROP TABLE panierpub');
        $this->addSql('DROP TABLE pubevent');
    }
}
