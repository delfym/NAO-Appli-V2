<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602103107 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE observation (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, bird_id INT NOT NULL, geographic_coordinates VARCHAR(255) NOT NULL, observation_title VARCHAR(255) NOT NULL, comment LONGTEXT NOT NULL, post_date DATETIME NOT NULL, validation_date DATETIME NOT NULL, delete_date DATETIME DEFAULT NULL, reason_of_delete LONGTEXT DEFAULT NULL, INDEX IDX_C576DBE0A76ED395 (user_id), INDEX IDX_C576DBE0E813F9 (bird_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE app_users (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, role VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_notif_check DATETIME DEFAULT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE birds (id INT AUTO_INCREMENT NOT NULL, nom_de_reference VARCHAR(255) NOT NULL, synonymes_chresonymes VARCHAR(255) NOT NULL, nom_verticulaire VARCHAR(255) NOT NULL, statut VARCHAR(255) DEFAULT NULL, regne VARCHAR(255) NOT NULL, classe VARCHAR(255) NOT NULL, ordre VARCHAR(255) NOT NULL, family VARCHAR(255) NOT NULL, cd_ref INT NOT NULL, cd_nom INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE observation ADD CONSTRAINT FK_C576DBE0A76ED395 FOREIGN KEY (user_id) REFERENCES app_users (id)');
        $this->addSql('ALTER TABLE observation ADD CONSTRAINT FK_C576DBE0E813F9 FOREIGN KEY (bird_id) REFERENCES birds (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE0A76ED395');
        $this->addSql('ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE0E813F9');
        $this->addSql('DROP TABLE observation');
        $this->addSql('DROP TABLE app_users');
        $this->addSql('DROP TABLE birds');
    }
}
