<?php



declare(strict_types=1);

namespace BrianFaust\TokenSession\Facades;

use Illuminate\Support\Facades\Facade;

class TokenSession extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'token.session';
    }
}
