<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 15:43
 */

namespace App\Services\Interfaces;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

interface IUserService
{
    /**
     * Get all users list
     *
     * @param array $userData
     * @return bool
     */
    public function loginUser(array $userData): bool;

    /**
     * Generate new token
     *
     * @param array $userData
     * @return null|string
     */
    public function generateToken(array $userData) : ?string;
}