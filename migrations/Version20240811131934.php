<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811131934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panierurgence ADD id_urgence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panierurgence ADD CONSTRAINT FK_3FB76E50F201FF6A FOREIGN KEY (id_urgence_id) REFERENCES urgenceevent (id)');
        $this->addSql('CREATE INDEX IDX_3FB76E50F201FF6A ON panierurgence (id_urgence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panierurgence DROP FOREIGN KEY FK_3FB76E50F201FF6A');
        $this->addSql('DROP INDEX IDX_3FB76E50F201FF6A ON panierurgence');
        $this->addSql('ALTER TABLE panierurgence DROP id_urgence_id');
    }
}
