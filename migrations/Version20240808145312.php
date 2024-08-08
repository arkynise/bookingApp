<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808145312 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eventnote ADD id_event_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE eventnote ADD CONSTRAINT FK_9319263D212C041E FOREIGN KEY (id_event_id) REFERENCES event (id)');
        $this->addSql('CREATE INDEX IDX_9319263D212C041E ON eventnote (id_event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eventnote DROP FOREIGN KEY FK_9319263D212C041E');
        $this->addSql('DROP INDEX IDX_9319263D212C041E ON eventnote');
        $this->addSql('ALTER TABLE eventnote DROP id_event_id');
    }
}
