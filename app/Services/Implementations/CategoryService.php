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
use App\Services\Interfaces\ICategoryService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class CategoryService implements ICategoryService
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
     * Get all categories list
     *
     * @return Collection
     * @throws
     */
    public function getAllCategories(): Collection
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