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

namespace App\Security;

use App\Exception\InvalidGitHubRequestSignatureException;
use App\Exception\MissingGitHubSignatureException;
use Symfony\Component\HttpFoundation\Request;

use function explode;
use function hash_hmac;

class GitHubRequestChecker
{
    public function __construct(
        private readonly string $signingSecret,
    ) {
    }

    /**
     * @throws MissingGitHubSignatureException;
     * @throws InvalidGitHubRequestSignatureException;
     */
    public function checkRequestSanity(Request $request): void
    {
        if (($signature = $request->headers->get('X-Hub-Signature-256')) === null) {
            throw new MissingGitHubSignatureException($request, 1_661_156_488);
        }

        $algo = explode('=', $signature)[0];
        $digest = hash_hmac('sha256', $request->getContent(), $this->signingSecret);

        if (!hash_equals(sprintf('%s=%s', $algo, $digest), $signature)) {
            throw new InvalidGitHubRequestSignatureException($request, $signature, 1_661_156_489);
        }
    }
}
