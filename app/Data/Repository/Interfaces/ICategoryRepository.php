<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:08
 */

namespace App\Data\Repository\Interfaces;


use Illuminate\Support\Collection;

interface ICategoryRepository
{
    /**
     * Get all categories list
     *
     * @return Collection
     */
    public function getAllCategories() : Collection;
}