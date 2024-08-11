<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811141818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE newnotification CHANGE idSalarie idSalarie INT NOT NULL');
        $this->addSql('ALTER TABLE newnotification ADD CONSTRAINT FK_73E6754C923751E8 FOREIGN KEY (idSalarie) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE newnotification DROP FOREIGN KEY FK_73E6754C923751E8');
        $this->addSql('ALTER TABLE newnotification CHANGE idSalarie idSalarie VARCHAR(255) NOT NULL');
    }
}
