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

namespace App\Package\Manifest;

use Composer\Json\JsonFile;
use RuntimeException;

use function is_array;
use function sprintf;

trait BasePackageManifestTrait
{
    private function load(string $manifestFilename, string $manifestSchemaFilename): void
    {
        $jsonFile = new JsonFile($manifestFilename);
        $jsonFile->validateSchema(JsonFile::STRICT_SCHEMA, $manifestSchemaFilename);

        if (!is_array($manifest = $jsonFile->read())) {
            throw new RuntimeException(
                sprintf('Manifest "%s" could not be decoded.', $manifestFilename),
                1_658_926_618
            );
        }

        /** @phpstan-ignore-next-line because validation above makes this assignment safe */
        $this->manifest = $manifest;
    }
}
