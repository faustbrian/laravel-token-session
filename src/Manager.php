<?php

/*
 * This file is part of Laravel Token Session.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\TokenSession;

use Illuminate\Session\SessionManager;
use Illuminate\Support\Collection;

/**
 * Class Manager.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Manager
{
    /**
     * Manager constructor.
     *
     * @param SessionManager $manager
     */
    public function __construct(SessionManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param $token
     * @param array $user
     */
    public function attempt($token, array $user = [])
    {
        $this->manager->put('access_token', $token);

        $this->user($user);

        $this->manager->save();
    }

    /**
     *
     */
    public function logout()
    {
        $this->manager->forget('access_token');

        $this->manager->forget('user');

        $this->manager->save();
    }

    /**
     * @return mixed
     */
    public function check()
    {
        return $this->manager->has('access_token');
    }

    /**
     * @return bool
     */
    public function guest()
    {
        return !$this->check();
    }

    /**
     * @param array $user
     *
     * @return mixed
     */
    public function user(array $user = [])
    {
        if (!empty($user)) {
            $this->manager->put('user', new Collection($user));

            $this->manager->save();
        }

        return $this->manager->get('user');
    }

    /**
     * @return mixed
     */
    public function token()
    {
        return $this->manager->get('access_token');
    }

    /**
     * @return mixed
     */
    public function id()
    {
        return $this->user()->get('id');
    }

    /**
     * @param $key
     * @param null $default
     *
     * @return bool
     */
    public function get($key, $default = null)
    {
        if (!$this->user()->has($key)) {
            return false;
        }

        return $this->user()->get($key, $default);
    }

    /**
     * @param $name
     * @param $value
     */
    public function set($name, $value)
    {
        $this->user()->put($name, $value);

        $this->manager->save();
    }

    /**
     *
     */
    public function flush()
    {
        $this->manager->flush();

        $this->manager->save();
    }

    /**
     * @param bool $destroy
     */
    public function regenerate($destroy = false)
    {
        $this->manager->regenerate($destroy);

        $this->manager->save();
    }
}
