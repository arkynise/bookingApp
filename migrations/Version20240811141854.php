<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811141854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE popvu DROP FOREIGN KEY FK_514EC314FDD3139D');
        $this->addSql('DROP INDEX `primary` ON popvu');
        $this->addSql('ALTER TABLE popvu CHANGE id_salarie_id idSalarie INT NOT NULL');
        $this->addSql('ALTER TABLE popvu ADD CONSTRAINT FK_514EC314923751E8 FOREIGN KEY (idSalarie) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE popvu ADD PRIMARY KEY (idSalarie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE popvu DROP FOREIGN KEY FK_514EC314923751E8');
        $this->addSql('DROP INDEX `PRIMARY` ON popvu');
        $this->addSql('ALTER TABLE popvu CHANGE idSalarie id_salarie_id INT NOT NULL');
        $this->addSql('ALTER TABLE popvu ADD CONSTRAINT FK_514EC314FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE popvu ADD PRIMARY KEY (id_salarie_id)');
    }
}
