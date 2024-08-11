<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811100449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE obseventpanier (id INT AUTO_INCREMENT NOT NULL, id_obs_event_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, INDEX IDX_B2E19FA7AE2AE843 (id_obs_event_id), INDEX IDX_B2E19FA7FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE obseventpanier ADD CONSTRAINT FK_B2E19FA7AE2AE843 FOREIGN KEY (id_obs_event_id) REFERENCES observent (id)');
        $this->addSql('ALTER TABLE obseventpanier ADD CONSTRAINT FK_B2E19FA7FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE obseventpanier DROP FOREIGN KEY FK_B2E19FA7AE2AE843');
        $this->addSql('ALTER TABLE obseventpanier DROP FOREIGN KEY FK_B2E19FA7FDD3139D');
        $this->addSql('DROP TABLE obseventpanier');
    }
}
