<?php

namespace App\Services;

use App\Services\{
    Implementations\CategoryService, Implementations\UserService, Interfaces\ICategoryService, Interfaces\IUserService
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
    public static function register() : void
    {
        app()->bind(IUserService::class, UserService::class);
        app()->bind(ICategoryService::class, CategoryService::class);

    }
}