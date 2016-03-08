<?php

/*
 * This file is part of Laravel TokenSession.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\TokenSession\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use DraperStudio\Tests\TokenSession\AbstractTestCase;
use DraperStudio\TokenSession\Facades\TokenSession;
use DraperStudio\TokenSession\Manager;

/**
 * This is the facade test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'token.session';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return TokenSession::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Manager::class;
    }
}
