<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211030205803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE akademisyen (id INT AUTO_INCREMENT NOT NULL, ad VARCHAR(100) NOT NULL, soyad VARCHAR(100) NOT NULL, uzmanlık VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ders (id INT AUTO_INCREMENT NOT NULL, ders_adi VARCHAR(100) NOT NULL, ders_kodu VARCHAR(100) NOT NULL, ders_aciklamasi VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ogrenci (id INT AUTO_INCREMENT NOT NULL, ad VARCHAR(100) NOT NULL, soyad VARCHAR(100) NOT NULL, ogrenci_no INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE akademisyen');
        $this->addSql('DROP TABLE ders');
        $this->addSql('DROP TABLE ogrenci');
    }
}
