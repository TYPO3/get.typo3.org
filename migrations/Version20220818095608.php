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
final class Version20220818095608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT category, name, version, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, version DOUBLE PRECISION DEFAULT NULL, category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, min VARCHAR(255) DEFAULT NULL, max VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_DB3F5550BF1CD3C3 FOREIGN KEY (version) REFERENCES major_version (version) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO requirement (category, name, version, min, max) SELECT category, name, version, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
        $this->addSql('CREATE INDEX IDX_DB3F5550BF1CD3C3 ON requirement (version)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DB3F5550BF1CD3C364C19C15E237E06 ON requirement (version, category, name)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__requirement AS SELECT version, category, name, min, max FROM requirement');
        $this->addSql('DROP TABLE requirement');
        $this->addSql('CREATE TABLE requirement (version DOUBLE PRECISION NOT NULL, category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, min VARCHAR(255) DEFAULT NULL, max VARCHAR(255) DEFAULT NULL, PRIMARY KEY(version, category, name), CONSTRAINT FK_DB3F5550BF1CD3C3 FOREIGN KEY (version) REFERENCES major_version (version) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO requirement (version, category, name, min, max) SELECT version, category, name, min, max FROM __temp__requirement');
        $this->addSql('DROP TABLE __temp__requirement');
        $this->addSql('CREATE INDEX IDX_DB3F5550BF1CD3C3 ON requirement (version)');
    }
}
