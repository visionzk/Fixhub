<?php

/*
 * This file is part of Fixhub.
 *
 * Copyright (C) 2016 Fixhub.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fixhub\Bus\Events;

use Fixhub\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\SerializesModels;

/**
 * Event which is fired when the JSON web token expires.
 */
class JsonWebTokenExpired extends Login
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user  = $user;
    }
}
