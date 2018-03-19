<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:26
 */

namespace App\Http\Controllers\Api\V1;


use App\Data\Model\Category;
use App\Exceptions\NotFoundRecordException;
use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Services\Interfaces\ICategoryService;
use Illuminate\Http\Request;

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

    /**
     * Get category detail with musics by category id
     *
     * @param Request $request
     * @return object
     */
    public function getCategoryWithMusicsByCategoryId(Request $request)
    {
        return ResponseResult::generate($this->categoryService->getCategoryWithMusicsByCategoryId($request->json()->get('id')), ResponseCodes::HTTP_OK);
    }
}