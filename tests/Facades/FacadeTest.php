<?php

namespace BrianFaust\Tests\TokenSession\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\TokenSession\AbstractTestCase;
use BrianFaust\TokenSession\Facades\TokenSession;
use BrianFaust\TokenSession\Manager;

class FacadeTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'token.session';
    }

    protected function getFacadeClass()
    {
        return TokenSession::class;
    }

    protected function getFacadeRoot()
    {
        return Manager::class;
    }
}
