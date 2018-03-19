<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:10
 */

namespace App\Services\Interfaces;


use Illuminate\Support\Collection;

interface ICategoryService
{
    /**
     * Get all categories list
     *
     * @return array
     */
    public function getAllCategories() : Collection;
}