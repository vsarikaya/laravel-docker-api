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
use App\Services\Interfaces\IUserFavoriteMusicsService;
use Illuminate\Http\Request;

class CategoryController extends BaseApiController
{
    private $categoryService;
    private $userFavoriteMusicsService;

    /**
     * CategoryController constructor.
     *
     * @param ICategoryService $ICategoryService
     * @param IUserFavoriteMusicsService $IUserFavoriteMusicsService
     */
    public function __construct(ICategoryService $ICategoryService, IUserFavoriteMusicsService $IUserFavoriteMusicsService)
    {
        $this->categoryService = $ICategoryService;
        $this->userFavoriteMusicsService = $IUserFavoriteMusicsService;
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
     * @param Request $request (Accept: id, user_id)
     * @return object
     */
    public function getCategoryWithMusicsByCategoryId(Request $request) : object
    {
        return ResponseResult::generate($this->categoryService->getCategoryWithMusicsByCategoryId($request->json()->get('id'), $request->json()->get('user_id')), ResponseCodes::HTTP_OK);
    }

    /**
     * Add or remove exists musics from favorite list
     *
     * @param Request $request (Accept: music_id, user_id)
     * @return object
     */
    public function addOrRemoveFromFavoriteList(Request $request) : object
    {
        return ResponseResult::generate($this->userFavoriteMusicsService->addOrRemoveFromFavoriteList($request->json()->get('music_id'), $request->json()->get('user_id')), ResponseCodes::HTTP_OK);
    }

}