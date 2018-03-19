<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:09
 */

namespace App\Data\Repository\Implementations;


use App\Data\Model\Category;
use App\Data\Repository\Interfaces\ICategoryRepository;
use Illuminate\Support\Collection;

class CategoryRepository implements ICategoryRepository
{

    /**
     * Get all categories list
     *
     * @return Collection
     */
    public function getAllCategories(): Collection
    {
        return Category::orderby('order_number')->get();
    }
}