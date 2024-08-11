<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240811135702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messagepop (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, text LONGTEXT DEFAULT NULL, date_creation DATETIME DEFAULT NULL, date_publication DATETIME DEFAULT NULL, actif TINYINT(1) DEFAULT NULL, valable_au DATE DEFAULT NULL, updateat DATETIME DEFAULT NULL, id_user_write INT DEFAULT NULL, for_all TINYINT(1) DEFAULT NULL, notifications TINYINT(1) DEFAULT NULL, INDEX IDX_2CEB610F7A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE poppanier (id INT AUTO_INCREMENT NOT NULL, id_msg_pop_id INT DEFAULT NULL, id_salarie_id INT DEFAULT NULL, INDEX IDX_6607191646FBF96E (id_msg_pop_id), INDEX IDX_66071916FDD3139D (id_salarie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE messagepop ADD CONSTRAINT FK_2CEB610F7A45358C FOREIGN KEY (groupe_id) REFERENCES groupeuser (id)');
        $this->addSql('ALTER TABLE poppanier ADD CONSTRAINT FK_6607191646FBF96E FOREIGN KEY (id_msg_pop_id) REFERENCES messagepop (id)');
        $this->addSql('ALTER TABLE poppanier ADD CONSTRAINT FK_66071916FDD3139D FOREIGN KEY (id_salarie_id) REFERENCES salarie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE messagepop DROP FOREIGN KEY FK_2CEB610F7A45358C');
        $this->addSql('ALTER TABLE poppanier DROP FOREIGN KEY FK_6607191646FBF96E');
        $this->addSql('ALTER TABLE poppanier DROP FOREIGN KEY FK_66071916FDD3139D');
        $this->addSql('DROP TABLE messagepop');
        $this->addSql('DROP TABLE poppanier');
    }
}
