<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 15:43
 */

namespace App\Services\Interfaces;


use Illuminate\Support\Collection;

interface IUserService
{
    /**
     * Get all users list
     *
     * @return Collection
     */
    public function getAllUsers() : Collection;
}