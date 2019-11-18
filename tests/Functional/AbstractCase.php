<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Tests\Functional;

use Symfony\Component\Panther\PantherTestCase;

class AbstractCase extends PantherTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
        DatabasePrimer::prime(self::$kernel);
    }
}
