<?php

namespace DraperStudio\TokenSession\Facades;

use Illuminate\Support\Facades\Facade;

class TokenSession extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'token.session';
    }
}
