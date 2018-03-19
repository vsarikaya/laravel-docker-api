<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:26
 */

namespace App\Http\Controllers\Api\V1;


use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Services\Interfaces\ICategoryService;

class CategoryController extends BaseApiController
{
    private $categoryService;

    /**
     * CategoryController constructor.
     *
     * @param ICategoryService $ICategoryService
     */
    public function __construct(ICategoryService $ICategoryService)
    {
        $this->categoryService = $ICategoryService;
    }

    /**
     * Get all categories list
     *
     * @return object
     */
    public function getAllCategories() : object
    {
        return ResponseResult::generate($this->categoryService->getAllCategories(), ResponseCodes::HTTP_OK);
    }
}