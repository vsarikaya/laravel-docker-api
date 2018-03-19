<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 16:45
 */

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Requests\UserLoginRequest;
use App\Services\Interfaces\IUserService;

class UserController extends BaseApiController
{
    private $userService;

    /**
     * UserController constructor.
     *
     * @param IUserService $IUserService
     */
    public function __construct(IUserService $IUserService)
    {
        $this->userService = $IUserService;
    }

    /**
     * User Login from application
     *
     * @param UserLoginRequest $request
     * @return object
     */
    public function getTokenByUserAttributes(UserLoginRequest $request): object
    {
        return ResponseResult::generate($this->userService->generateToken($request->all()), ResponseCodes::HTTP_OK);
    }


}