<?php

/*
 * This file is part of Laravel Token Session.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\TokenSession\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class TokenSession.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class TokenSession extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'token.session';
    }
}
