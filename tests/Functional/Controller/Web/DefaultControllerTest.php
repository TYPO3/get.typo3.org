<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Tests\Functional\Controller\Web;

use App\DataFixtures\MajorVersionFixtures;
use App\DataFixtures\ReleaseFixtures;
use App\DataFixtures\RequirementFixtures;
use App\Tests\Functional\AbstractCase;

class DefaultControllerTest extends AbstractCase
{
    /**
     * @test
     */
    public function webDefaultRoute()
    {
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();

        $this->client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Build Blazingly');
        $this->assertSelectorTextContains('#download-community-1 .btn', 'Get version 10');
        $this->assertSelectorTextContains('#download-community-2 .btn', 'Get version 9');
        $this->assertSelectorTextContains('#download-elts-1 .btn-primary', 'Buy ELTS');
        $this->assertSelectorTextNotContains('h4', 'TYPO3 4.5');
    }
}
