<?php

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

namespace App\Tests\Functional\Controller\Web;

use App\DataFixtures\MajorVersionFixtures;
use App\DataFixtures\ReleaseFixtures;
use App\DataFixtures\RequirementFixtures;
use App\Tests\Functional\AbstractCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends AbstractCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();
    }

    /**
     * @test
     */
    public function webDefault(): void
    {
        $this->client->request('GET', '/');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', 'Build Blazingly');
        self::assertSelectorTextContains('#download-community-1 .btn', 'Get version 10');
        self::assertSelectorTextContains('#download-community-2 .btn', 'Get version 9');
        self::assertSelectorTextContains('#download-elts-1 .btn-primary', 'Buy ELTS');
        self::assertSelectorTextNotContains('h4', 'TYPO3 4.5');
    }

    /**
     * @test
     */
    public function webDownloadRedirect(): void
    {
        $this->client->request('GET', '/download');
        self::assertResponseRedirects();
        self::assertSelectorTextContains('a', '/version/10');
    }

    /**
     * @test
     */
    public function webVersionSprint(): void
    {
        $this->client->request('GET', '/version/10');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', 'TYPO3 10');
    }

    /**
     * @test
     */
    public function webVersionSpecific(): void
    {
        $this->client->request('GET', '/version/10.0.0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '(10.0.0)');
        self::assertSelectorNotExists('#notice-elts');
        self::assertSelectorExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionElts(): void
    {
        $this->client->request('GET', '/version/6.2');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '(6.2.23 ELTS)');
        self::assertSelectorExists('#notice-elts');
        self::assertSelectorNotExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionBeforeElts(): void
    {
        $this->client->request('GET', '/version/6.2.0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '(6.2.0)');
        self::assertSelectorExists('#notice-elts');
        self::assertSelectorExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionOutdated(): void
    {
        $this->client->request('GET', '/version/4.5.0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '(4.5.0)');
        self::assertSelectorExists('#notice-outdated');
        self::assertSelectorExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionOutdatedElts(): void
    {
        $this->client->request('GET', '/version/4.5');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '(4.5.23 ELTS)');
        self::assertSelectorExists('#notice-outdated');
        self::assertSelectorNotExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webReleaseNotesRedirect(): void
    {
        $this->client->request('GET', '/release-notes');
        self::assertResponseRedirects();
        self::assertSelectorTextContains('a', '/release-notes/10');
    }

    /**
     * @test
     */
    public function weReleaseNotesSprint(): void
    {
        $this->client->request('GET', '/release-notes/10');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '10.0.5');
    }

    /**
     * @test
     */
    public function webReleaseNotesSpecific(): void
    {
        $this->client->request('GET', '/release-notes/10.0.0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '10.0.0');
        self::assertSelectorNotExists('#notice-elts');
    }

    /**
     * @test
     */
    public function webReleaseNotesElts(): void
    {
        $this->client->request('GET', '/release-notes/6.2');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '6.2.23 ELTS');
        self::assertSelectorExists('#notice-elts');
    }

    /**
     * @test
     */
    public function webReleaseNotesBeforeElts(): void
    {
        $this->client->request('GET', '/release-notes/6.2.0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '6.2.0');
        self::assertSelectorExists('#notice-elts');
    }

    /**
     * @test
     */
    public function webReleaseNotesOutdated(): void
    {
        $this->client->request('GET', '/release-notes/4.5.0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '4.5.0');
        self::assertSelectorExists('#notice-outdated');
    }

    /**
     * @test
     */
    public function webReleaseNotesOutdatedElts(): void
    {
        $this->client->request('GET', '/release-notes/4.5');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', '4.5.23 ELTS');
        self::assertSelectorExists('#notice-outdated');
    }

    /**
     * @test
     */
    public function webDownloadEltsVersion(): void
    {
        $this->client->request('GET', '/6.2.23');
        self::assertResponseStatusCodeSame(Response::HTTP_PAYMENT_REQUIRED);
    }
}
