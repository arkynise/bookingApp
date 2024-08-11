<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811134823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panierurgenceentreprise ADD id_urgence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panierurgenceentreprise ADD CONSTRAINT FK_A2B42C1BF201FF6A FOREIGN KEY (id_urgence_id) REFERENCES urgenceentreprise (id)');
        $this->addSql('CREATE INDEX IDX_A2B42C1BF201FF6A ON panierurgenceentreprise (id_urgence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panierurgenceentreprise DROP FOREIGN KEY FK_A2B42C1BF201FF6A');
        $this->addSql('DROP INDEX IDX_A2B42C1BF201FF6A ON panierurgenceentreprise');
        $this->addSql('ALTER TABLE panierurgenceentreprise DROP id_urgence_id');
    }
}
