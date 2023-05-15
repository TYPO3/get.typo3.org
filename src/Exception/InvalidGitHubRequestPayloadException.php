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

namespace App\Exception;

use Symfony\Component\HttpFoundation\Request;
use Throwable;

class InvalidGitHubRequestPayloadException extends GitHubWebhookException
{
    public function __construct(
        Request $request,
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct(
            $request,
            'Invalid GitHub request payload.',
            $code,
            $previous
        );
    }

    public function getRequestBody(): string
    {
        return $this->getRequest()->getContent();
    }
}
