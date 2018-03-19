<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:10
 */

namespace App\Services\Interfaces;


use App\Data\Model\Category;
use Illuminate\Support\Collection;

interface ICategoryService
{
    /**
     * Get Category By Id
     *
     * @param int $id
     * @return Category
     */
    public function getCategoryById(int $id) : Category;

    /**
     * Get category detail with musics by category id
     *
     * @param int $id
     * @return Category
     */
    public function getCategoryWithMusicsByCategoryId(int $id) : Category;

    /**
     * Get all categories list
     *
     * @return Collection
     */
    public function getAllCategories() : Collection;
}