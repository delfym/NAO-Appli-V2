<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180531202618 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE observation ADD user_id INT NOT NULL, ADD bird_id INT NOT NULL');
        $this->addSql('ALTER TABLE observation ADD CONSTRAINT FK_C576DBE0A76ED395 FOREIGN KEY (user_id) REFERENCES app_users (id)');
        $this->addSql('ALTER TABLE observation ADD CONSTRAINT FK_C576DBE0E813F9 FOREIGN KEY (bird_id) REFERENCES birds (id)');
        $this->addSql('CREATE INDEX IDX_C576DBE0A76ED395 ON observation (user_id)');
        $this->addSql('CREATE INDEX IDX_C576DBE0E813F9 ON observation (bird_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE0A76ED395');
        $this->addSql('ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE0E813F9');
        $this->addSql('DROP INDEX IDX_C576DBE0A76ED395 ON observation');
        $this->addSql('DROP INDEX IDX_C576DBE0E813F9 ON observation');
        $this->addSql('ALTER TABLE observation DROP user_id, DROP bird_id');
    }
}
