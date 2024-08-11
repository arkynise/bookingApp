<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811115345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE connexionpanierpub (id INT AUTO_INCREMENT NOT NULL, id_pub_event_id INT DEFAULT NULL, id_event_id INT DEFAULT NULL, id_panier_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, INDEX IDX_15BEA9709F07A150 (id_pub_event_id), INDEX IDX_15BEA970212C041E (id_event_id), INDEX IDX_15BEA97077482E5B (id_panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, nom_profile VARCHAR(255) DEFAULT NULL, taux_vente NUMERIC(10, 2) NOT NULL, taux_achat NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profilepubevent (id INT AUTO_INCREMENT NOT NULL, id_pub_event_id INT DEFAULT NULL, id_profile_id INT DEFAULT NULL, INDEX IDX_6864DD7F9F07A150 (id_pub_event_id), INDEX IDX_6864DD7F6970926F (id_profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE retourpubevent (id INT AUTO_INCREMENT NOT NULL, id_pub_event_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, date_reponse DATETIME DEFAULT NULL, rep_sal TINYINT(1) DEFAULT NULL, INDEX IDX_4983276F9F07A150 (id_pub_event_id), INDEX IDX_4983276FFDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE connexionpanierpub ADD CONSTRAINT FK_15BEA9709F07A150 FOREIGN KEY (id_pub_event_id) REFERENCES pubevent (id)');
        $this->addSql('ALTER TABLE connexionpanierpub ADD CONSTRAINT FK_15BEA970212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE connexionpanierpub ADD CONSTRAINT FK_15BEA97077482E5B FOREIGN KEY (id_panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE profilepubevent ADD CONSTRAINT FK_6864DD7F9F07A150 FOREIGN KEY (id_pub_event_id) REFERENCES pubevent (id)');
        $this->addSql('ALTER TABLE profilepubevent ADD CONSTRAINT FK_6864DD7F6970926F FOREIGN KEY (id_profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE retourpubevent ADD CONSTRAINT FK_4983276F9F07A150 FOREIGN KEY (id_pub_event_id) REFERENCES pubevent (id)');
        $this->addSql('ALTER TABLE retourpubevent ADD CONSTRAINT FK_4983276FFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE agence CHANGE code_ape CodeAPE VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE panierpub ADD id_pub_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panierpub ADD CONSTRAINT FK_CB786BC9A5CA559A FOREIGN KEY (id_pub_id) REFERENCES pubevent (id)');
        $this->addSql('CREATE INDEX IDX_CB786BC9A5CA559A ON panierpub (id_pub_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE connexionpanierpub DROP FOREIGN KEY FK_15BEA9709F07A150');
        $this->addSql('ALTER TABLE connexionpanierpub DROP FOREIGN KEY FK_15BEA970212C041E');
        $this->addSql('ALTER TABLE connexionpanierpub DROP FOREIGN KEY FK_15BEA97077482E5B');
        $this->addSql('ALTER TABLE profilepubevent DROP FOREIGN KEY FK_6864DD7F9F07A150');
        $this->addSql('ALTER TABLE profilepubevent DROP FOREIGN KEY FK_6864DD7F6970926F');
        $this->addSql('ALTER TABLE retourpubevent DROP FOREIGN KEY FK_4983276F9F07A150');
        $this->addSql('ALTER TABLE retourpubevent DROP FOREIGN KEY FK_4983276FFDD3139D');
        $this->addSql('DROP TABLE connexionpanierpub');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE profilepubevent');
        $this->addSql('DROP TABLE retourpubevent');
        $this->addSql('ALTER TABLE agence CHANGE CodeAPE code_ape VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE panierpub DROP FOREIGN KEY FK_CB786BC9A5CA559A');
        $this->addSql('DROP INDEX IDX_CB786BC9A5CA559A ON panierpub');
        $this->addSql('ALTER TABLE panierpub DROP id_pub_id');
    }
}
