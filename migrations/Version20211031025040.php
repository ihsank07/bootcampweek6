<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211031025040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ogrenci_ders (ogrenci_id INT NOT NULL, ders_id INT NOT NULL, INDEX IDX_786E97F7FFDDE955 (ogrenci_id), INDEX IDX_786E97F7D934899E (ders_id), PRIMARY KEY(ogrenci_id, ders_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ogrenci_ders ADD CONSTRAINT FK_786E97F7FFDDE955 FOREIGN KEY (ogrenci_id) REFERENCES ogrenci (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ogrenci_ders ADD CONSTRAINT FK_786E97F7D934899E FOREIGN KEY (ders_id) REFERENCES ders (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ogrenci_ders');
    }
}
