<?php

/*
 * This file is part of Laravel Token Session.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TokenSession;

use Illuminate\Support\Collection;
use Illuminate\Session\SessionManager;

class Manager
{
    public function __construct(SessionManager $manager)
    {
        $this->manager = $manager;
    }

    public function attempt($token, array $user = [])
    {
        $this->manager->put('access_token', $token);

        $this->user($user);

        $this->manager->save();
    }

    public function logout()
    {
        $this->manager->forget('access_token');

        $this->manager->forget('user');

        $this->manager->save();
    }

    public function check(): bool
    {
        return $this->manager->has('access_token');
    }

    public function guest()
    {
        return ! $this->check();
    }

    public function user(array $user = [])
    {
        if (! empty($user)) {
            $this->manager->put('user', new Collection($user));

            $this->manager->save();
        }

        return $this->manager->get('user');
    }

    public function token(): string
    {
        return $this->manager->get('access_token');
    }

    public function id(): int
    {
        return $this->user()->get('id');
    }

    public function get($key, $default = null)
    {
        if (! $this->user()->has($key)) {
            return false;
        }

        return $this->user()->get($key, $default);
    }

    public function set($name, $value)
    {
        $this->user()->put($name, $value);

        $this->manager->save();
    }

    public function flush()
    {
        $this->manager->flush();

        $this->manager->save();
    }

    public function regenerate($destroy = false)
    {
        $this->manager->regenerate($destroy);

        $this->manager->save();
    }
}
