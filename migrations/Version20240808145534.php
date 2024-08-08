<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808145534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salarienote ADD id_salarie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE salarienote ADD CONSTRAINT FK_7F537A60FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('CREATE INDEX IDX_7F537A60FDD3139D ON salarienote (id_salarie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salarienote DROP FOREIGN KEY FK_7F537A60FDD3139D');
        $this->addSql('DROP INDEX IDX_7F537A60FDD3139D ON salarienote');
        $this->addSql('ALTER TABLE salarienote DROP id_salarie_id');
    }
}
