<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 15:41
 */

namespace App\Data\Repository;

use App\Data\Repository\{
    Implementations\CategoryMusicsRepository, Implementations\CategoryRepository, Implementations\UserFavoriteMusicsRepository,
    Implementations\UserRepository, Interfaces\ICategoryMusicsRepository, Interfaces\ICategoryRepository, Interfaces\IUserFavoriteMusicsRepository, Interfaces\IUserRepository
};

class RepositoryIoCRegister
{
    /**
     * Register Repository dependency injection
     *
     * @return void
     */
    public static function register() : void
    {
        app()->bind(IUserRepository::class, UserRepository::class);
        app()->bind(ICategoryRepository::class, CategoryRepository::class);
        app()->bind(ICategoryMusicsRepository::class, CategoryMusicsRepository::class);
        app()->bind(IUserFavoriteMusicsRepository::class, UserFavoriteMusicsRepository::class);
    }
}