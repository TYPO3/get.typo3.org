<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/get.typo3.org.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329161851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\SqlitePlatform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\SqlitePlatform'."
        );

        $this->addSql('DROP INDEX IDX_9E47031D17E84B00');
        $this->addSql('CREATE TEMPORARY TABLE __temp__release AS SELECT version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content, elts FROM "release"');
        $this->addSql('DROP TABLE "release"');
        $this->addSql('CREATE TABLE "release" (version VARCHAR(255) NOT NULL, major_version DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL, type VARCHAR(255) NOT NULL, tar_package_md5sum VARCHAR(255) DEFAULT NULL, tar_package_sha1sum VARCHAR(255) DEFAULT NULL, tar_package_sha256sum VARCHAR(255) DEFAULT NULL, zip_package_md5sum VARCHAR(255) DEFAULT NULL, zip_package_sha1sum VARCHAR(255) DEFAULT NULL, zip_package_sha256sum VARCHAR(255) DEFAULT NULL, release_notes_news_link VARCHAR(255) DEFAULT NULL, release_notes_news CLOB DEFAULT NULL, release_notes_upgrading_instructions CLOB DEFAULT NULL, release_notes_changes CLOB DEFAULT NULL, release_notes_legacy_content CLOB DEFAULT NULL, elts BOOLEAN DEFAULT 0 NOT NULL, PRIMARY KEY(version), CONSTRAINT FK_9E47031D17E84B00 FOREIGN KEY (major_version) REFERENCES major_version (version) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO "release" (version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content, elts) SELECT version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content, elts FROM __temp__release');
        $this->addSql('DROP TABLE __temp__release');
        $this->addSql('CREATE INDEX IDX_9E47031D17E84B00 ON "release" (major_version)');
        $this->addSql('DROP INDEX IDX_DB3F5550BF1CD3C3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, version DOUBLE PRECISION NOT NULL, min VARCHAR(255) DEFAULT NULL, max VARCHAR(255) DEFAULT NULL, PRIMARY KEY(version, category, name), CONSTRAINT FK_DB3F5550BF1CD3C3 FOREIGN KEY (version) REFERENCES major_version (version) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
        $this->addSql('CREATE INDEX IDX_DB3F5550BF1CD3C3 ON requirement (version)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\SqlitePlatform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\SqlitePlatform'."
        );

        $this->addSql('DROP INDEX IDX_9E47031D17E84B00');
        $this->addSql('CREATE TEMPORARY TABLE __temp__release AS SELECT version, major_version, date, type, elts, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content FROM "release"');
        $this->addSql('DROP TABLE "release"');
        $this->addSql('CREATE TABLE "release" (version VARCHAR(255) NOT NULL, major_version DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL, type VARCHAR(255) NOT NULL, elts BOOLEAN NOT NULL, tar_package_md5sum VARCHAR(255) DEFAULT NULL, tar_package_sha1sum VARCHAR(255) DEFAULT NULL, tar_package_sha256sum VARCHAR(255) DEFAULT NULL, zip_package_md5sum VARCHAR(255) DEFAULT NULL, zip_package_sha1sum VARCHAR(255) DEFAULT NULL, zip_package_sha256sum VARCHAR(255) DEFAULT NULL, release_notes_news_link VARCHAR(255) DEFAULT NULL, release_notes_news CLOB DEFAULT NULL, release_notes_upgrading_instructions CLOB DEFAULT NULL, release_notes_changes CLOB DEFAULT NULL, release_notes_legacy_content CLOB DEFAULT NULL, PRIMARY KEY(version))');
        $this->addSql('INSERT INTO "release" (version, major_version, date, type, elts, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content) SELECT version, major_version, date, type, elts, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content FROM __temp__release');
        $this->addSql('DROP TABLE __temp__release');
        $this->addSql('CREATE INDEX IDX_9E47031D17E84B00 ON "release" (major_version)');
        $this->addSql('DROP INDEX IDX_DB3F5550BF1CD3C3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, version DOUBLE PRECISION NOT NULL, min VARCHAR(255) DEFAULT NULL, max VARCHAR(255) DEFAULT NULL, PRIMARY KEY(version, category, name))');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
        $this->addSql('CREATE INDEX IDX_DB3F5550BF1CD3C3 ON requirement (version)');
    }
}
