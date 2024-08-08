<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240808144505 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cataloguesalarie ADD id_cat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cataloguesalarie ADD CONSTRAINT FK_C7C342F1C09A1CAE FOREIGN KEY (id_cat_id) REFERENCES catalogue (id)');
        $this->addSql('CREATE INDEX IDX_C7C342F1C09A1CAE ON cataloguesalarie (id_cat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cataloguesalarie DROP FOREIGN KEY FK_C7C342F1C09A1CAE');
        $this->addSql('DROP INDEX IDX_C7C342F1C09A1CAE ON cataloguesalarie');
        $this->addSql('ALTER TABLE cataloguesalarie DROP id_cat_id');
    }
}
