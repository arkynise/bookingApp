<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808152459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE diffusionsalprest (id INT AUTO_INCREMENT NOT NULL, id_salarie_id INT DEFAULT NULL, id_event_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, rep_sal SMALLINT DEFAULT NULL, rep_back SMALLINT DEFAULT NULL, rep_sal_final SMALLINT DEFAULT NULL, notifications SMALLINT DEFAULT NULL, nb_reset_en_att SMALLINT DEFAULT NULL, date_retour DATETIME DEFAULT NULL, INDEX IDX_792664EFDD3139D (id_salarie_id), INDEX IDX_792664E212C041E (id_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE diffusionsalprest ADD CONSTRAINT FK_792664EFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE diffusionsalprest ADD CONSTRAINT FK_792664E212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diffusionsalprest DROP FOREIGN KEY FK_792664EFDD3139D');
        $this->addSql('ALTER TABLE diffusionsalprest DROP FOREIGN KEY FK_792664E212C041E');
        $this->addSql('DROP TABLE diffusionsalprest');
    }
}
