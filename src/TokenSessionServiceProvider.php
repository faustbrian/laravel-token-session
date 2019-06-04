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

namespace Artisanry\TokenSession;

use Illuminate\Support\ServiceProvider;

class TokenSessionServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('token.session', function ($app) {
            return new Manager($app['session']);
        });
    }
}
