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
final class Version20221005143246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add regular_maintenance_until field';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE major_version ADD COLUMN regular_maintenance_until DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__major_version AS SELECT version, title, subtitle, description, release_date, maintained_until, elts_until, lts FROM major_version');
        $this->addSql('DROP TABLE major_version');
        $this->addSql('CREATE TABLE major_version (version DOUBLE PRECISION NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, release_date DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , maintained_until DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , elts_until DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , lts DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(version))');
        $this->addSql('INSERT INTO major_version (version, title, subtitle, description, release_date, maintained_until, elts_until, lts) SELECT version, title, subtitle, description, release_date, maintained_until, elts_until, lts FROM __temp__major_version');
        $this->addSql('DROP TABLE __temp__major_version');
    }
}
