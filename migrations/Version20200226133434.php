<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200226133434 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__major_version AS SELECT version, title, subtitle, description, maintained_until, release_date, lts FROM major_version');
        $this->addSql('DROP TABLE major_version');
        $this->addSql('CREATE TABLE major_version (version DOUBLE PRECISION NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, subtitle VARCHAR(255) NOT NULL COLLATE BINARY, description VARCHAR(255) NOT NULL COLLATE BINARY, release_date DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , lts DOUBLE PRECISION DEFAULT NULL, maintained_until DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , PRIMARY KEY(version))');
        $this->addSql('INSERT INTO major_version (version, title, subtitle, description, maintained_until, release_date, lts) SELECT version, title, subtitle, description, maintained_until, release_date, lts FROM __temp__major_version');
        $this->addSql('DROP TABLE __temp__major_version');
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL COLLATE BINARY, name VARCHAR(255) NOT NULL COLLATE BINARY, version DOUBLE PRECISION NOT NULL, min VARCHAR(255) DEFAULT NULL, max VARCHAR(255) DEFAULT NULL, PRIMARY KEY(version, category, name))');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__major_version AS SELECT version, title, subtitle, description, maintained_until, release_date, lts FROM major_version');
        $this->addSql('DROP TABLE major_version');
        $this->addSql('CREATE TABLE major_version (version DOUBLE PRECISION NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, release_date DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , lts DOUBLE PRECISION DEFAULT NULL, maintained_until DATETIME DEFAULT \'NULL --(DC2Type:datetime_immutable)\' --(DC2Type:datetime_immutable)
        , PRIMARY KEY(version))');
        $this->addSql('INSERT INTO major_version (version, title, subtitle, description, maintained_until, release_date, lts) SELECT version, title, subtitle, description, maintained_until, release_date, lts FROM __temp__major_version');
        $this->addSql('DROP TABLE __temp__major_version');
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, version DOUBLE PRECISION NOT NULL, min DOUBLE PRECISION DEFAULT NULL, max DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(version, category, name))');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
    }
}
