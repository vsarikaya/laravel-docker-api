<?php

namespace App\Services;

use App\Services\{
    Implementations\UserService,
    Interfaces\IUserService
};

/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 13:46
 */
class ServiceIoCRegister
{
    /**
     * Register Service dependency injection
     *
     * @return void
     */
    public function register() : void
    {
        app()->bind(IUserService::class, UserService::class);

    }
}