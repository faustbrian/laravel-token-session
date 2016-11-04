<?php

namespace BrianFaust\Tests\TokenSession;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\TokenSession\ServiceProvider::class;
    }
}
