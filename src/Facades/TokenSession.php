<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Token Session.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\TokenSession\Facades;

use Illuminate\Support\Facades\Facade;

class TokenSession extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'token.session';
    }
}
