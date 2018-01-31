<?php

/*
 * This file is part of the RSQueue library
 *
 * Copyright (c) 2016 - now() Marc Morera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace RSQueueBundle\Tests;

/**
 * Class SimpleRedisTest
 */
class SimpleRedisTest extends RSQueueFunctionalTest
{
    /**
     * Get redis configuration
     *
     * @return array
     */
    static function getRedisConfiguration(): array
    {
        return [];
    }
}