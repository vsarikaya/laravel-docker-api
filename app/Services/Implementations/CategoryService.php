<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:11
 */

namespace App\Services\Implementations;


use App\Data\Repository\Interfaces\ICategoryRepository;
use App\Exceptions\NotFoundRecordException;
use App\Services\BaseService;
use App\Services\Interfaces\ICategoryService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use App\Data\Model\Category;

class CategoryService extends BaseService implements ICategoryService
{
    private $categoryRepository;

    /**
     * CategoryService constructor injection
     *
     * @param ICategoryRepository $ICategoryRepository
     */
    public function __construct(ICategoryRepository $ICategoryRepository)
    {
        $this->categoryRepository = $ICategoryRepository;
    }

    /**
     * Get Category By Id
     *
     * @param int $id
     * @return Category
     * @throws NotFoundRecordException
     */
    public function getCategoryById(int $id) : Category
    {
        Log::channel('api')->info("CategoryService called --> Request getCategoryById() function");

        try {
            Log::channel('api')->info("CategoryService called --> Return category by id : $id");

            return $this->categoryRepository->getCategoryById($id);
        } catch (\Exception $exception) {
            throw new NotFoundRecordException(__('exception.notFoundRecord'), $exception->getCode());
        }
    }

    /**
     * Get category detail with musics by category id
     *
     * @param int $id
     * @return Category
     * @throws NotFoundRecordException
     */
    public function getCategoryWithMusicsByCategoryId(int $id) : Category
    {
        Log::channel('api')->info("CategoryService called --> Request getCategoryWithMusicsByCategoryId() function");

        try {
            Log::channel('api')->info("CategoryService called --> Return category with musics by id : $id");

            return $this->categoryRepository->getCategoryWithMusicsByCategoryId($id);
        } catch (\Exception $exception) {
            throw new NotFoundRecordException(__('exception.notFoundRecord'), $exception->getCode());
        }
    }

    /**
     * Get all categories list
     *
     * @return Collection
     * @throws
     */
    public function getAllCategories() : Collection
    {
        Log::channel('api')->info("CategoryService called --> Request getAllCategories() function");

        try {
            Log::channel('api')->info("CategoryService called --> Return all categories");

            return $this->categoryRepository->getAllCategories();
        } catch (\Exception $exception) {
            throw new NotFoundRecordException(__('exception.notRecord'), $exception->getCode());
        }
    }

}