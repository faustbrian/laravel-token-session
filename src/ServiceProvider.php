<?php

namespace BrianFaust\TokenSession;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->singleton('token.session', function ($app) {
            return new Manager($app['session']);
        });
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['token.session']);
    }

    public function getPackageName()
    {
        return 'token-session';
    }
}
