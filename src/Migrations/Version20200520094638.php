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
final class Version20200520094638 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__major_version AS SELECT version, title, subtitle, description, release_date, lts, maintained_until FROM major_version');
        $this->addSql('DROP TABLE major_version');
        $this->addSql('CREATE TABLE major_version (version DOUBLE PRECISION NOT NULL, title VARCHAR(255) NOT NULL COLLATE BINARY, subtitle VARCHAR(255) NOT NULL COLLATE BINARY, description VARCHAR(255) NOT NULL COLLATE BINARY, release_date DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , lts DOUBLE PRECISION DEFAULT NULL, maintained_until DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , elts_until DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , PRIMARY KEY(version))');
        $this->addSql('INSERT INTO major_version (version, title, subtitle, description, release_date, lts, maintained_until, elts_until) SELECT version, title, subtitle, description, release_date, lts, maintained_until, datetime(maintained_until, \'+3 year\') FROM __temp__major_version');
        $this->addSql('DROP TABLE __temp__major_version');
        $this->addSql('DROP INDEX IDX_9E47031D17E84B00');
        $this->addSql('CREATE TEMPORARY TABLE __temp__release AS SELECT version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content, elts FROM "release"');
        $this->addSql('DROP TABLE "release"');
        $this->addSql('CREATE TABLE "release" (version VARCHAR(255) NOT NULL COLLATE BINARY, major_version DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL, type VARCHAR(255) NOT NULL COLLATE BINARY, tar_package_md5sum VARCHAR(255) DEFAULT NULL COLLATE BINARY, tar_package_sha1sum VARCHAR(255) DEFAULT NULL COLLATE BINARY, tar_package_sha256sum VARCHAR(255) DEFAULT NULL COLLATE BINARY, zip_package_md5sum VARCHAR(255) DEFAULT NULL COLLATE BINARY, zip_package_sha1sum VARCHAR(255) DEFAULT NULL COLLATE BINARY, zip_package_sha256sum VARCHAR(255) DEFAULT NULL COLLATE BINARY, release_notes_news_link VARCHAR(255) DEFAULT NULL COLLATE BINARY, release_notes_news CLOB DEFAULT NULL COLLATE BINARY, release_notes_upgrading_instructions CLOB DEFAULT NULL COLLATE BINARY, release_notes_changes CLOB DEFAULT NULL COLLATE BINARY, release_notes_legacy_content CLOB DEFAULT NULL COLLATE BINARY, elts BOOLEAN NOT NULL, PRIMARY KEY(version), CONSTRAINT FK_9E47031D17E84B00 FOREIGN KEY (major_version) REFERENCES major_version (version) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO "release" (version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content, elts) SELECT version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content, elts FROM __temp__release');
        $this->addSql('DROP TABLE __temp__release');
        $this->addSql('CREATE INDEX IDX_9E47031D17E84B00 ON "release" (major_version)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL COLLATE BINARY, name VARCHAR(255) NOT NULL COLLATE BINARY, version DOUBLE PRECISION NOT NULL, min VARCHAR(255) DEFAULT NULL COLLATE BINARY, max VARCHAR(255) DEFAULT NULL COLLATE BINARY, PRIMARY KEY(version, category, name), CONSTRAINT FK_DB3F5550BF1CD3C3 FOREIGN KEY (version) REFERENCES major_version (version) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
        $this->addSql('CREATE INDEX IDX_DB3F5550BF1CD3C3 ON requirement (version)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__major_version AS SELECT version, title, subtitle, description, release_date, maintained_until, lts FROM major_version');
        $this->addSql('DROP TABLE major_version');
        $this->addSql('CREATE TABLE major_version (version DOUBLE PRECISION NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, release_date DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , lts DOUBLE PRECISION DEFAULT NULL, maintained_until DATETIME DEFAULT \'NULL --(DC2Type:datetime_immutable)\' --(DC2Type:datetime_immutable)
        , PRIMARY KEY(version))');
        $this->addSql('INSERT INTO major_version (version, title, subtitle, description, release_date, maintained_until, lts) SELECT version, title, subtitle, description, release_date, maintained_until, lts FROM __temp__major_version');
        $this->addSql('DROP TABLE __temp__major_version');
        $this->addSql('DROP INDEX IDX_9E47031D17E84B00');
        $this->addSql('CREATE TEMPORARY TABLE __temp__release AS SELECT version, major_version, date, type, elts, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content FROM "release"');
        $this->addSql('DROP TABLE "release"');
        $this->addSql('CREATE TABLE "release" (version VARCHAR(255) NOT NULL, major_version DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL, type VARCHAR(255) NOT NULL, tar_package_md5sum VARCHAR(255) DEFAULT NULL, tar_package_sha1sum VARCHAR(255) DEFAULT NULL, tar_package_sha256sum VARCHAR(255) DEFAULT NULL, zip_package_md5sum VARCHAR(255) DEFAULT NULL, zip_package_sha1sum VARCHAR(255) DEFAULT NULL, zip_package_sha256sum VARCHAR(255) DEFAULT NULL, release_notes_news_link VARCHAR(255) DEFAULT NULL, release_notes_news CLOB DEFAULT NULL, release_notes_upgrading_instructions CLOB DEFAULT NULL, release_notes_changes CLOB DEFAULT NULL, release_notes_legacy_content CLOB DEFAULT NULL, elts BOOLEAN DEFAULT \'0\' NOT NULL, PRIMARY KEY(version))');
        $this->addSql('INSERT INTO "release" (version, major_version, date, type, elts, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content) SELECT version, major_version, date, type, elts, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content FROM __temp__release');
        $this->addSql('DROP TABLE __temp__release');
        $this->addSql('CREATE INDEX IDX_9E47031D17E84B00 ON "release" (major_version)');
        $this->addSql('DROP INDEX IDX_DB3F5550BF1CD3C3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, version DOUBLE PRECISION NOT NULL, min VARCHAR(255) DEFAULT NULL, max VARCHAR(255) DEFAULT NULL, PRIMARY KEY(version, category, name))');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
    }
}
