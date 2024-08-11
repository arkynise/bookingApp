<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811141656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE newnotification DROP FOREIGN KEY FK_73E6754CFDD3139D');
        $this->addSql('DROP INDEX `primary` ON newnotification');
        $this->addSql('ALTER TABLE newnotification ADD idSalarie VARCHAR(255) NOT NULL, DROP id_salarie_id');
        $this->addSql('ALTER TABLE newnotification ADD PRIMARY KEY (idSalarie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX `PRIMARY` ON newnotification');
        $this->addSql('ALTER TABLE newnotification ADD id_salarie_id INT NOT NULL, DROP idSalarie');
        $this->addSql('ALTER TABLE newnotification ADD CONSTRAINT FK_73E6754CFDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE newnotification ADD PRIMARY KEY (id_salarie_id)');
    }
}
