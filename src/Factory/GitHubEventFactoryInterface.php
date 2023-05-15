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

namespace App\Factory;

use App\Event\GitHubEvent;
use App\Exception\InvalidGitHubRequestPayloadException;
use App\Exception\MissingGitHubEventTypeException;
use Symfony\Component\HttpFoundation\Request;

interface GitHubEventFactoryInterface
{
    /**
     * Build a GitHub web hook event object depending on the given type/payload.
     *
     * @param array<string, mixed> $payload
     */
    public function build(string $type, array $payload): GitHubEvent;

    /**
     * Build a GitHub web hook event object based on the incoming request.
     *
     * @throws InvalidGitHubRequestPayloadException If the request payload is not a valid JSON content
     * @throws MissingGitHubEventTypeException      If the GitHub event type could not be found in the request headers
     */
    public function buildFromRequest(Request $request): GitHubEvent;
}
