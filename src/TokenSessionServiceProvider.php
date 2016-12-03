<?php

/*
 * This file is part of Laravel Token Session.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Token Session.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TokenSession;

use BrianFaust\ServiceProvider\ServiceProvider;

class TokenSessionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        parent::register();

        $this->app->singleton('token.session', function ($app) {
            return new Manager($app['session']);
        });
    }

    public function provides(): array
    {
        return array_merge(parent::provides(), ['token.session']);
    }

    public function getPackageName(): string
    {
        return 'token-session';
    }
}
