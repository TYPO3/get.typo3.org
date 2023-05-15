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

namespace App\Controller\Webhooks;

use App\Exception\UnknownGitHubEventTypeException;
use App\Factory\GitHubEventFactory;
use App\Security\GitHubRequestChecker;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;

#[Route(path: '/webhooks/github', defaults: ['_format' => 'json'])]
class GitHubWebhookController extends AbstractController
{
    public function __construct(
        private readonly GitHubEventFactory $gitHubEventFactory,
        private readonly GitHubRequestChecker $gitHubRequestChecker,
        private \App\Service\BasePackageService $basePackageService
    ) {
    }

    #[Route(path: '', name: 'github_endpoint', methods: ['POST'])]
    public function endPoint(Request $request): Response
    {
        try {
            $this->gitHubRequestChecker->checkRequestSanity($request);
        } catch (Throwable $throwable) {
            // GitHub requires a successful (2xx) status in every case see
            // https://pubsubhubbub.github.io/PubSubHubbub/pubsubhubbub-core-0.4.html#authednotify
            return new Response($throwable->getMessage(), Response::HTTP_ACCEPTED);
        }

        $gitHubEvent = $this->gitHubEventFactory->buildFromRequest($request);

        switch ($gitHubEvent->getType()) {
            case 'ping':
                return new Response('Ping received.', Response::HTTP_OK);

            case 'push':
                $this->basePackageService->updatePackageRepository();
                return new Response('Package repository updated.', Response::HTTP_OK);

            default:
                throw new UnknownGitHubEventTypeException($request, $gitHubEvent->getType(), 1_661_157_800);
        }
    }
}
