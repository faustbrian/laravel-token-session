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

namespace Artisanry\Tests\TokenSession\Facades;

use Artisanry\Tests\TokenSession\AbstractTestCase;
use Artisanry\TokenSession\Facades\TokenSession;
use Artisanry\TokenSession\Manager;
use GrahamCampbell\TestBenchCore\FacadeTrait;

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
