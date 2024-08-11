<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811102645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE horairemsdispo (id INT AUTO_INCREMENT NOT NULL, id_jour_id INT DEFAULT NULL, debut_h VARCHAR(255) DEFAULT NULL, fin_h VARCHAR(255) DEFAULT NULL, int_deb INT DEFAULT NULL, int_fin INT DEFAULT NULL, INDEX IDX_9CF5336EFC91C3A0 (id_jour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jourmsdispo (id INT AUTO_INCREMENT NOT NULL, id_ms_dispo_id INT DEFAULT NULL, date_jour DATE DEFAULT NULL, lieu_jour VARCHAR(255) DEFAULT NULL, INDEX IDX_449FD8A29CEED4B8 (id_ms_dispo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE horairemsdispo ADD CONSTRAINT FK_9CF5336EFC91C3A0 FOREIGN KEY (id_jour_id) REFERENCES jourmsdispo (id)');
        $this->addSql('ALTER TABLE jourmsdispo ADD CONSTRAINT FK_449FD8A29CEED4B8 FOREIGN KEY (id_ms_dispo_id) REFERENCES missiondispo (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horairemsdispo DROP FOREIGN KEY FK_9CF5336EFC91C3A0');
        $this->addSql('ALTER TABLE jourmsdispo DROP FOREIGN KEY FK_449FD8A29CEED4B8');
        $this->addSql('DROP TABLE horairemsdispo');
        $this->addSql('DROP TABLE jourmsdispo');
    }
}
