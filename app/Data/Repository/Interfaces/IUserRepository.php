<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 13:53
 */

namespace App\Data\Repository\Interfaces;

use Illuminate\Contracts\Auth\Authenticatable;

interface IUserRepository
{
    /**
     * Generate new token
     *
     * @param Authenticatable $auth
     * @return null|string
     */
    public function generateToken(Authenticatable $auth): ?string;
}