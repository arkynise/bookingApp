<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811103211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE retourmsdispo (id INT AUTO_INCREMENT NOT NULL, id_salarie_id INT DEFAULT NULL, id_ms_dispo_id INT DEFAULT NULL, id_jour_id INT DEFAULT NULL, id_horaire_id INT DEFAULT NULL, date_reponse DATETIME DEFAULT NULL, rep_sal TINYINT(1) DEFAULT NULL, jour_entiere TINYINT(1) NOT NULL, INDEX IDX_B6B512D6FDD3139D (id_salarie_id), INDEX IDX_B6B512D69CEED4B8 (id_ms_dispo_id), INDEX IDX_B6B512D6FC91C3A0 (id_jour_id), INDEX IDX_B6B512D6FD4FC5C2 (id_horaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE retourmsdispo ADD CONSTRAINT FK_B6B512D6FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE retourmsdispo ADD CONSTRAINT FK_B6B512D69CEED4B8 FOREIGN KEY (id_ms_dispo_id) REFERENCES missiondispo (id)');
        $this->addSql('ALTER TABLE retourmsdispo ADD CONSTRAINT FK_B6B512D6FC91C3A0 FOREIGN KEY (id_jour_id) REFERENCES jourmsdispo (id)');
        $this->addSql('ALTER TABLE retourmsdispo ADD CONSTRAINT FK_B6B512D6FD4FC5C2 FOREIGN KEY (id_horaire_id) REFERENCES horairemsdispo (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE retourmsdispo DROP FOREIGN KEY FK_B6B512D6FDD3139D');
        $this->addSql('ALTER TABLE retourmsdispo DROP FOREIGN KEY FK_B6B512D69CEED4B8');
        $this->addSql('ALTER TABLE retourmsdispo DROP FOREIGN KEY FK_B6B512D6FC91C3A0');
        $this->addSql('ALTER TABLE retourmsdispo DROP FOREIGN KEY FK_B6B512D6FD4FC5C2');
        $this->addSql('DROP TABLE retourmsdispo');
    }
}
