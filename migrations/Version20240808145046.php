<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808145046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devisuser ADD devis_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE devisuser ADD CONSTRAINT FK_CD6B421041DEFADA FOREIGN KEY (devis_id) REFERENCES devis (id)');
        $this->addSql('CREATE INDEX IDX_CD6B421041DEFADA ON devisuser (devis_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devisuser DROP FOREIGN KEY FK_CD6B421041DEFADA');
        $this->addSql('DROP INDEX IDX_CD6B421041DEFADA ON devisuser');
        $this->addSql('ALTER TABLE devisuser DROP devis_id');
    }
}
