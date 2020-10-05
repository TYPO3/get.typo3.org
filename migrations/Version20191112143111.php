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
final class Version20191112143111 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add ELTS bool to releases';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE release ADD COLUMN elts BOOLEAN DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_9E47031D17E84B00');
        $this->addSql('CREATE TEMPORARY TABLE __temp__release AS SELECT version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content FROM "release"');
        $this->addSql('DROP TABLE "release"');
        $this->addSql('CREATE TABLE "release" (version VARCHAR(255) NOT NULL, major_version DOUBLE PRECISION DEFAULT NULL, date DATETIME NOT NULL, type VARCHAR(255) NOT NULL, tar_package_md5sum VARCHAR(255) DEFAULT NULL, tar_package_sha1sum VARCHAR(255) DEFAULT NULL, tar_package_sha256sum VARCHAR(255) DEFAULT NULL, zip_package_md5sum VARCHAR(255) DEFAULT NULL, zip_package_sha1sum VARCHAR(255) DEFAULT NULL, zip_package_sha256sum VARCHAR(255) DEFAULT NULL, release_notes_news_link VARCHAR(255) DEFAULT NULL, release_notes_news CLOB DEFAULT NULL, release_notes_upgrading_instructions CLOB DEFAULT NULL, release_notes_changes CLOB DEFAULT NULL, release_notes_legacy_content CLOB DEFAULT NULL, PRIMARY KEY(version))');
        $this->addSql('INSERT INTO "release" (version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content) SELECT version, major_version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, release_notes_news_link, release_notes_news, release_notes_upgrading_instructions, release_notes_changes, release_notes_legacy_content FROM __temp__release');
        $this->addSql('DROP TABLE __temp__release');
        $this->addSql('CREATE INDEX IDX_9E47031D17E84B00 ON "release" (major_version)');
    }
}
