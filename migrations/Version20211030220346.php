<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211030220346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ders ADD ders_id INT NOT NULL');
        $this->addSql('ALTER TABLE ders ADD CONSTRAINT FK_F198D71D934899E FOREIGN KEY (ders_id) REFERENCES akademisyen (id)');
        $this->addSql('CREATE INDEX IDX_F198D71D934899E ON ders (ders_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ders DROP FOREIGN KEY FK_F198D71D934899E');
        $this->addSql('DROP INDEX IDX_F198D71D934899E ON ders');
        $this->addSql('ALTER TABLE ders DROP ders_id');
    }
}
