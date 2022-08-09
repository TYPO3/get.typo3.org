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
final class Version20220818183005 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add BasePackages for Sitepackage Builder';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE base_packages (name VARCHAR(255) NOT NULL, active BOOLEAN NOT NULL, official BOOLEAN NOT NULL, PRIMARY KEY(name))');
        $this->addSql('INSERT INTO base_packages (name, active, official) VALUES (?, ?, ?)', ['1' => 'typo3/bootstrap-package', '2' => 1, '3' => 1], ['1' => 2, '2' => 5, '3' => 5]);
        $this->addSql('INSERT INTO base_packages (name, active, official) VALUES (?, ?, ?)', ['1' => 'typo3/fluid-styled-content', '2' => 1, '3' => 1], ['1' => 2, '2' => 5, '3' => 5]);
        $this->addSql('INSERT INTO base_packages (name, active, official) VALUES (?, ?, ?)', ['1' => 'typo3/introduction-package', '2' => 1, '3' => 0], ['1' => 2, '2' => 5, '3' => 5]);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE base_packages');
    }
}
