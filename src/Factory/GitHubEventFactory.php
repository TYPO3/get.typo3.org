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
use Throwable;

use function json_decode;

use const JSON_THROW_ON_ERROR;

class GitHubEventFactory implements GitHubEventFactoryInterface
{
    public function build(string $type, array $payload): GitHubEvent
    {
        return new GitHubEvent($type, $payload);
    }

    public function buildFromRequest(Request $request): GitHubEvent
    {
        if (($eventType = $request->headers->get('X-GitHub-Event')) === null) {
            throw new MissingGitHubEventTypeException($request);
        }

        $content = $request->getContent();

        try {
            /** @var array<string, mixed> $payload */
            $payload = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (Throwable $throwable) {
            throw new InvalidGitHubRequestPayloadException($request, 1_661_155_479, $throwable);
        }

        return $this->build($eventType, $payload);
    }
}
