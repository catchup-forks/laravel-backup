<?php

/*
 * This file is part of Laravel Backup.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Backup\Destinations;

use Vinkla\Backup\Destinations\LocalDestination;

/**
 * This is the stream destination test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class LocalDestinationTest extends AbstractDestinationTestCase
{
    public function getFactory()
    {
        return new LocalDestination();
    }
}