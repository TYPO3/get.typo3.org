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

namespace App\Service;

use App\Entity\Release;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\RemoteEvent\RemoteEvent;
use Symfony\Component\Webhook\Messenger\SendWebhookMessage;
use Symfony\Component\Webhook\Subscriber;

final class WebhookService
{
    public function __construct(
        private readonly MessageBusInterface $bus,
        private readonly string $url,
        private readonly string $secret,
    ) {
    }

    public function announceRelease(Release $release): void
    {
        $subscriber = new Subscriber('https://my.typo3.org/webhook', $this->secret);
        $event = new RemoteEvent('release.new', '1', [
            'release' => $release,
        ]);
        $this->bus->dispatch(new SendWebhookMessage($subscriber, $event));
    }
}
