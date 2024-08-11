<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811141050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tokenmobile (id INT AUTO_INCREMENT NOT NULL, id_salarie_id INT DEFAULT NULL, token VARCHAR(255) DEFAULT NULL, INDEX IDX_1595CB3DFDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tokenmobile ADD CONSTRAINT FK_1595CB3DFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tokenmobile DROP FOREIGN KEY FK_1595CB3DFDD3139D');
        $this->addSql('DROP TABLE tokenmobile');
    }
}
