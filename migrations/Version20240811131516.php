<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811131516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE retoururgenceevent (id INT AUTO_INCREMENT NOT NULL, id_urgence_event_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, date_retour DATETIME DEFAULT NULL, reponse TINYINT(1) DEFAULT NULL, INDEX IDX_608BA79578BD6E4C (id_urgence_event_id), INDEX IDX_608BA795FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE urgenceevent (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, id_event_id INT DEFAULT NULL, id_prest_id INT DEFAULT NULL, id_panier_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, homme TINYINT(1) DEFAULT NULL, femme TINYINT(1) DEFAULT NULL, actif TINYINT(1) DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, date_retrait DATETIME NOT NULL, prix VARCHAR(255) DEFAULT NULL, dlt_affect TINYINT(1) DEFAULT NULL, INDEX IDX_9E3787F97A45358C (groupe_id), INDEX IDX_9E3787F9212C041E (id_event_id), INDEX IDX_9E3787F979484C71 (id_prest_id), INDEX IDX_9E3787F977482E5B (id_panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE retoururgenceevent ADD CONSTRAINT FK_608BA79578BD6E4C FOREIGN KEY (id_urgence_event_id) REFERENCES urgenceevent (id)');
        $this->addSql('ALTER TABLE retoururgenceevent ADD CONSTRAINT FK_608BA795FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE urgenceevent ADD CONSTRAINT FK_9E3787F97A45358C FOREIGN KEY (groupe_id) REFERENCES groupeuser (id)');
        $this->addSql('ALTER TABLE urgenceevent ADD CONSTRAINT FK_9E3787F9212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE urgenceevent ADD CONSTRAINT FK_9E3787F979484C71 FOREIGN KEY (id_prest_id) REFERENCES prestation (id)');
        $this->addSql('ALTER TABLE urgenceevent ADD CONSTRAINT FK_9E3787F977482E5B FOREIGN KEY (id_panier_id) REFERENCES panier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE retoururgenceevent DROP FOREIGN KEY FK_608BA79578BD6E4C');
        $this->addSql('ALTER TABLE retoururgenceevent DROP FOREIGN KEY FK_608BA795FDD3139D');
        $this->addSql('ALTER TABLE urgenceevent DROP FOREIGN KEY FK_9E3787F97A45358C');
        $this->addSql('ALTER TABLE urgenceevent DROP FOREIGN KEY FK_9E3787F9212C041E');
        $this->addSql('ALTER TABLE urgenceevent DROP FOREIGN KEY FK_9E3787F979484C71');
        $this->addSql('ALTER TABLE urgenceevent DROP FOREIGN KEY FK_9E3787F977482E5B');
        $this->addSql('DROP TABLE retoururgenceevent');
        $this->addSql('DROP TABLE urgenceevent');
    }
}
