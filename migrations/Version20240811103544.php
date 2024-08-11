<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811103544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paniermsdispo (id INT AUTO_INCREMENT NOT NULL, id_ms_dispo_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_3868329B9CEED4B8 (id_ms_dispo_id), INDEX IDX_3868329BFDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paniermsdispo ADD CONSTRAINT FK_3868329B9CEED4B8 FOREIGN KEY (id_ms_dispo_id) REFERENCES missiondispo (id)');
        $this->addSql('ALTER TABLE paniermsdispo ADD CONSTRAINT FK_3868329BFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paniermsdispo DROP FOREIGN KEY FK_3868329B9CEED4B8');
        $this->addSql('ALTER TABLE paniermsdispo DROP FOREIGN KEY FK_3868329BFDD3139D');
        $this->addSql('DROP TABLE paniermsdispo');
    }
}
