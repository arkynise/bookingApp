<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811102105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE connexionmslgevent (id INT AUTO_INCREMENT NOT NULL, id_mslg_id INT DEFAULT NULL, id_event_id INT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, INDEX IDX_1357C25E47156D90 (id_mslg_id), INDEX IDX_1357C25E212C041E (id_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE connexionmslgevent ADD CONSTRAINT FK_1357C25E47156D90 FOREIGN KEY (id_mslg_id) REFERENCES missiondispo (id)');
        $this->addSql('ALTER TABLE connexionmslgevent ADD CONSTRAINT FK_1357C25E212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE connexionmslgevent DROP FOREIGN KEY FK_1357C25E47156D90');
        $this->addSql('ALTER TABLE connexionmslgevent DROP FOREIGN KEY FK_1357C25E212C041E');
        $this->addSql('DROP TABLE connexionmslgevent');
    }
}
