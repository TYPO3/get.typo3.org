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
class Version20180324140648 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\SqlitePlatform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\SqlitePlatform'."
        );

        $this->addSql('CREATE TABLE major_version (version DOUBLE PRECISION NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, maintained_until DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , release_date DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , lts DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(version))');
        $this->addSql('CREATE TABLE "release" (version VARCHAR(255) NOT NULL, major_version DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL, type VARCHAR(255) NOT NULL, tar_package_md5sum VARCHAR(255) DEFAULT NULL, tar_package_sha1sum VARCHAR(255) DEFAULT NULL, tar_package_sha256sum VARCHAR(255) DEFAULT NULL, zip_package_md5sum VARCHAR(255) DEFAULT NULL, zip_package_sha1sum VARCHAR(255) DEFAULT NULL, zip_package_sha256sum VARCHAR(255) DEFAULT NULL, release_notes_news_link VARCHAR(255) DEFAULT NULL, release_notes_news CLOB DEFAULT NULL, release_notes_upgrading_instructions CLOB DEFAULT NULL, release_notes_changes CLOB DEFAULT NULL, release_notes_legacy_content CLOB DEFAULT NULL, PRIMARY KEY(version))');
        $this->addSql('CREATE INDEX IDX_9E47031D17E84B00 ON "release" (major_version)');
        $this->addSql('CREATE TABLE requirement (category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, version DOUBLE PRECISION NOT NULL, min DOUBLE PRECISION DEFAULT NULL, max DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(version, category, name))');
        $this->addSql('CREATE INDEX IDX_DB3F5550BF1CD3C3 ON requirement (version)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\SqlitePlatform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\SqlitePlatform'."
        );

        $this->addSql('DROP TABLE major_version');
        $this->addSql('DROP TABLE "release"');
        $this->addSql('DROP TABLE requirement');
    }
}
