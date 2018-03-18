<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 13:53
 */

namespace App\Data\Repository\Interfaces;

use Illuminate\Support\Collection;

interface IUserRepository
{
    /**
     * Get all users list
     *
     * @return Collection
     */
    public function getUserList() : Collection;
}