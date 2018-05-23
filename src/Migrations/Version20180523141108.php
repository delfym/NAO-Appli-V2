<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180523141108 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE observation ADD bird_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE observation ADD CONSTRAINT FK_C576DBE0136AA6B7 FOREIGN KEY (bird_id_id) REFERENCES birds (id)');
        $this->addSql('CREATE INDEX IDX_C576DBE0136AA6B7 ON observation (bird_id_id)');
        $this->addSql('ALTER TABLE user ADD observation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6491409DD88 FOREIGN KEY (observation_id) REFERENCES observation (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6491409DD88 ON user (observation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE0136AA6B7');
        $this->addSql('DROP INDEX IDX_C576DBE0136AA6B7 ON observation');
        $this->addSql('ALTER TABLE observation DROP bird_id_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6491409DD88');
        $this->addSql('DROP INDEX IDX_8D93D6491409DD88 ON user');
        $this->addSql('ALTER TABLE user DROP observation_id');
    }
}
