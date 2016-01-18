<?php

namespace DraperStudio\TokenSession;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    public function register()
    {
        $this->app->singleton('token.session', function ($app) {
            return new Manager($app['session']);
        });
    }
}
