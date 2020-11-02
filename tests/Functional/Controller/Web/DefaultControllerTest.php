<?php

/*
 * This file is part of the package t3o/gettypo3org.
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
    public function webDefault()
    {
        $this->client->request('GET', '/');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Build Blazingly');
        $this->assertSelectorTextContains('#download-community-1 .btn', 'Get version 10');
        $this->assertSelectorTextContains('#download-community-2 .btn', 'Get version 9');
        $this->assertSelectorTextContains('#download-elts-1 .btn-primary', 'Buy ELTS');
        $this->assertSelectorTextNotContains('h4', 'TYPO3 4.5');
    }

    /**
     * @test
     */
    public function webDownloadRedirect()
    {
        $this->client->request('GET', '/download');
        $this->assertResponseRedirects();
        $this->assertSelectorTextContains('a', '/version/10');
    }

    /**
     * @test
     */
    public function webVersionSprint()
    {
        $this->client->request('GET', '/version/10');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'TYPO3 10');
    }

    /**
     * @test
     */
    public function webVersionSpecific()
    {
        $this->client->request('GET', '/version/10.0.0');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '(10.0.0)');
        $this->assertSelectorNotExists('#notice-elts');
        $this->assertSelectorExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionElts()
    {
        $this->client->request('GET', '/version/6.2');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '(6.2.23 ELTS)');
        $this->assertSelectorExists('#notice-elts');
        $this->assertSelectorNotExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionBeforeElts()
    {
        $this->client->request('GET', '/version/6.2.0');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '(6.2.0)');
        $this->assertSelectorExists('#notice-elts');
        $this->assertSelectorExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionOutdated()
    {
        $this->client->request('GET', '/version/4.5.0');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '(4.5.0)');
        $this->assertSelectorExists('#notice-outdated');
        $this->assertSelectorExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webVersionOutdatedElts()
    {
        $this->client->request('GET', '/version/4.5');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '(4.5.23 ELTS)');
        $this->assertSelectorExists('#notice-outdated');
        $this->assertSelectorNotExists('#accordion-download');
    }

    /**
     * @test
     */
    public function webReleaseNotesRedirect()
    {
        $this->client->request('GET', '/release-notes');
        $this->assertResponseRedirects();
        $this->assertSelectorTextContains('a', '/release-notes/10');
    }

    /**
     * @test
     */
    public function weReleaseNotesSprint()
    {
        $this->client->request('GET', '/release-notes/10');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '10.0.5');
    }

    /**
     * @test
     */
    public function webReleaseNotesSpecific()
    {
        $this->client->request('GET', '/release-notes/10.0.0');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '10.0.0');
        $this->assertSelectorNotExists('#notice-elts');
    }

    /**
     * @test
     */
    public function webReleaseNotesElts()
    {
        $this->client->request('GET', '/release-notes/6.2');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '6.2.23 ELTS');
        $this->assertSelectorExists('#notice-elts');
    }

    /**
     * @test
     */
    public function webReleaseNotesBeforeElts()
    {
        $this->client->request('GET', '/release-notes/6.2.0');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '6.2.0');
        $this->assertSelectorExists('#notice-elts');
    }

    /**
     * @test
     */
    public function webReleaseNotesOutdated()
    {
        $this->client->request('GET', '/release-notes/4.5.0');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '4.5.0');
        $this->assertSelectorExists('#notice-outdated');
    }

    /**
     * @test
     */
    public function webReleaseNotesOutdatedElts()
    {
        $this->client->request('GET', '/release-notes/4.5');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', '4.5.23 ELTS');
        $this->assertSelectorExists('#notice-outdated');
    }

    /**
     * @test
     */
    public function webDownloadEltsVersion()
    {
        $this->client->request('GET', '/6.2.23');
        $this->assertResponseStatusCodeSame(Response::HTTP_PAYMENT_REQUIRED);
    }
}
