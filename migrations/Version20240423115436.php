<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423115436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, state_code VARCHAR(255) NOT NULL, country_code CHAR(2) NOT NULL, latitude NUMERIC(10, 8) NOT NULL, longitude NUMERIC(11, 8) NOT NULL, created_at DATETIME DEFAULT \'2014-01-01 06:31:01\' NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, flag TINYINT(1) DEFAULT 1 NOT NULL, wikiDataId VARCHAR(255) DEFAULT NULL COMMENT \'Rapid API GeoDB city\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, iso3 CHAR(3) DEFAULT NULL, numeric_code CHAR(3) DEFAULT NULL, iso2 CHAR(2) DEFAULT NULL, phonecode VARCHAR(255) DEFAULT NULL, capital VARCHAR(255) DEFAULT NULL, currency VARCHAR(255) DEFAULT NULL, currency_name VARCHAR(255) DEFAULT NULL, currency_symbol VARCHAR(255) DEFAULT NULL, tld VARCHAR(255) DEFAULT NULL, native VARCHAR(255) DEFAULT NULL, region VARCHAR(255) DEFAULT NULL, subregion VARCHAR(255) DEFAULT NULL, nationality VARCHAR(255) DEFAULT NULL, timezones TEXT DEFAULT NULL, translations TEXT DEFAULT NULL, latitude NUMERIC(10, 8) DEFAULT NULL, longitude NUMERIC(11, 8) DEFAULT NULL, emoji VARCHAR(191) DEFAULT NULL, emojiU VARCHAR(191) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, flag TINYINT(1) DEFAULT 1 NOT NULL, wikiDataId VARCHAR(255) DEFAULT NULL COMMENT \'Rapid API GeoDB city\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, translations TEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, flag TINYINT(1) DEFAULT 1 NOT NULL, wikiDataId VARCHAR(255) DEFAULT NULL COMMENT \'Rapid API GeoDB city\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE state (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, country_code CHAR(2) NOT NULL, fips_code VARCHAR(255) DEFAULT NULL, iso2 VARCHAR(255) DEFAULT NULL, type VARCHAR(191) DEFAULT NULL, latitude NUMERIC(10, 8) DEFAULT NULL, longitude NUMERIC(11, 8) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, flag TINYINT(1) DEFAULT 1 NOT NULL, wikiDataId VARCHAR(255) DEFAULT NULL COMMENT \'Rapid API GeoDB city\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subregion (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, translations TEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, flag TINYINT(1) DEFAULT 1 NOT NULL, wikiDataId VARCHAR(255) DEFAULT NULL COMMENT \'Rapid API GeoDB city\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE state');
        $this->addSql('DROP TABLE subregion');
    }
}
