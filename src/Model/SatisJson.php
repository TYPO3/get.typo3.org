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

namespace App\Model;

use Stringable;
use InvalidArgumentException;

use function json_encode;

/**
 * @codeCoverageIgnore
 */
class SatisJson implements Stringable
{
    /**
     * @var array{
     *   name: string,
     *   homepage: string|null,
     *   repositories: array<int, array<string, string>>|array{},
     *   require: array<string, string>|array{},
     *   require-all: bool,
     *   require-dependencies: bool,
     *   require-dev-dependencies: bool
     * }
     */
    protected array $data;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException(sprintf(
                'Argument "$name" must be of type "string", "%s" given',
                gettype($name)
            ));
        }

        $this->data = [
            'name' => $name,
            'homepage' => null,
            'repositories' => [],
            'require' => [],
            'require-all' => false,
            'require-dependencies' => false,
            'require-dev-dependencies' => false,
            'output-html' => false,
        ];
    }

    public function setHomepage(string $homepage): void
    {
        $this->data['homepage'] = $homepage;
    }

    /**
     * @param array<int, array<string, string>>|array{} $repositories
     */
    public function setRepositories(array $repositories): void
    {
        $this->data['repositories'] = $repositories;
    }

    /**
     * @param array<string, string> $repository
     */
    public function addRepository(array $repository): void
    {
        $this->data['repositories'][] = $repository;
    }

    public function requireAll(): void
    {
        $this->data['require-all'] = true;
    }

    public function requireDependencies(): void
    {
        $this->data['require-dependencies'] = true;
    }

    public function requireDevDependencies(): void
    {
        $this->data['require-dev-dependencies'] = true;
    }

    public function useProviders(): void
    {
        $this->data['providers'] = true;
    }

    public function __toString(): string
    {
        if ($this->data['repositories'] === []) {
            unset($this->data['repositories']);
        }

        if ($this->data['require'] === []) {
            unset($this->data['require']);
        }

        return (string)json_encode($this->data, JSON_PRETTY_PRINT);
    }
}
