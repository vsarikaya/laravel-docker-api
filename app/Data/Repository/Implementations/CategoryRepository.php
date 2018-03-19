<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:09
 */

namespace App\Data\Repository\Implementations;


use App\Data\Model\Category;
use App\Data\Repository\BaseRepository;
use App\Data\Repository\Interfaces\ICategoryRepository;
use Illuminate\Support\Collection;

class CategoryRepository extends BaseRepository implements ICategoryRepository
{
    /**
     * Get category detail by category id
     *
     * @param int $id
     * @return Category
     */
    public function getCategoryById(int $id) : Category
    {
        return Category::findOrFail($id);
    }

    /**
     * Get category detail with musics by category id
     *
     * @param int $id
     * @return Category
     */
    public function getCategoryWithMusicsByCategoryId(int $id) : Category
    {
        return $this->getCategoryById($id)->load('musics');
    }

    /**
     * Get all categories list
     *
     * @return Collection
     */
    public function getAllCategories() : Collection
    {
        return Category::orderby('order_number')->get();
    }
}