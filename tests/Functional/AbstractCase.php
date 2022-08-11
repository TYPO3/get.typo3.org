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

namespace App\Tests\Functional;

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use LogicException;
use Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\Panther\PantherTestCase;
use Symfony\Component\Security\Core\User\UserProviderInterface;

abstract class AbstractCase extends PantherTestCase
{
    protected KernelBrowser $client;

    private ?ORMExecutor $fixtureExecutor = null;

    private ?ContainerAwareLoader $fixtureLoader = null;

    protected function setUp(): void
    {
        self::bootKernel();
        DatabasePrimer::prime(self::$kernel);

        $client = static::createClient();

        if (!$client instanceof KernelBrowser) {
            throw new LogicException('Browser instance is not a KernelBrowser');
        }

        $this->client = $client;
    }

    protected function logIn(): void
    {
        $userProvider = static::getContainer()->get(UserProviderInterface::class);
        if (!$userProvider instanceof UserProviderInterface) {
            throw new LogicException('UserProvider instance is not a UserProviderInterface');
        }

        $testUser = $userProvider->loadUserByIdentifier('test-user');

        $this->client->loginUser($testUser, 'api');
    }

    protected function addFixture(FixtureInterface $fixture): void
    {
        $this->getFixtureLoader()->addFixture($fixture);
    }

    protected function executeFixtures(): void
    {
        $this->getFixtureExecutor()->execute($this->getFixtureLoader()->getFixtures());
    }

    private function getFixtureExecutor(): ORMExecutor
    {
        if ($this->fixtureExecutor === null) {
            $managerRegistry = static::getContainer()->get('doctrine');
            if (!$managerRegistry instanceof ManagerRegistry) {
                throw new LogicException('Doctrine instance is not a ManagerRegistry');
            }

            $entityManager = $managerRegistry->getManager();
            if (!$entityManager instanceof EntityManagerInterface) {
                throw new LogicException('Manager instance is not a EntityManagerInterface');
            }

            $this->fixtureExecutor = new ORMExecutor($entityManager, new ORMPurger($entityManager));
        }

        return $this->fixtureExecutor;
    }

    private function getFixtureLoader(): ContainerAwareLoader
    {
        if ($this->fixtureLoader === null) {
            $this->fixtureLoader = new ContainerAwareLoader(static::getContainer());
        }

        return $this->fixtureLoader;
    }
}
