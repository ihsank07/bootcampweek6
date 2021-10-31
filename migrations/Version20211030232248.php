<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211030232248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ders ADD akademisyen_id INT NOT NULL');
        $this->addSql('ALTER TABLE ders ADD CONSTRAINT FK_F198D71CD69577F FOREIGN KEY (akademisyen_id) REFERENCES akademisyen (id)');
        $this->addSql('CREATE INDEX IDX_F198D71CD69577F ON ders (akademisyen_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ders DROP FOREIGN KEY FK_F198D71CD69577F');
        $this->addSql('DROP INDEX IDX_F198D71CD69577F ON ders');
        $this->addSql('ALTER TABLE ders DROP akademisyen_id');
    }
}
