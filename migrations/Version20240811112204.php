<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811112204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, id_event_id INT DEFAULT NULL, id_msg_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, dlt_doublon TINYINT(1) DEFAULT NULL, cloture TINYINT(1) DEFAULT NULL, titre_pop VARCHAR(255) DEFAULT NULL, msg_pop VARCHAR(255) DEFAULT NULL, INDEX IDX_24CC0DF2212C041E (id_event_id), UNIQUE INDEX UNIQ_24CC0DF2A21C414D (id_msg_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A21C414D FOREIGN KEY (id_msg_id) REFERENCES message (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2212C041E');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2A21C414D');
        $this->addSql('DROP TABLE panier');
    }
}
