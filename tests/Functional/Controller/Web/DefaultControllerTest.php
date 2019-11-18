<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Tests\Functional\Controller\Web;

use App\Tests\Functional\AbstractCase;

class DefaultControllerTest extends AbstractCase
{
    public function testDefaultRoute()
    {
        $this->client->request('GET', '/');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Build Blazingly');
    }
}
