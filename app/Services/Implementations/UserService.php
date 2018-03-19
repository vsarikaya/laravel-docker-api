<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 15:44
 */

namespace App\Services\Implementations;

use App\Data\Repository\Interfaces\IUserRepository;
use App\Exceptions\ResponseException;
use App\Exceptions\TokenException;
use Exception;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use App\Helpers\{
    Response,
    ResponseCodes
};
use App\Services\{
    BaseService,
    Interfaces\IUserService
};

/**
 * UserService
 *
 * @package App\Services\Implementations
 */
class UserService extends BaseService implements IUserService
{
    private $userRepository;

    /**
     * UserService constructor injection
     *
     * @param IUserRepository $IUserRepository
     */
    public function __construct(IUserRepository $IUserRepository)
    {
        $this->userRepository = $IUserRepository;
    }

    /**
     * Get already logged user
     *
     * @return Authenticatable|null
     */
    private function _getLoggedUser(): ?Authenticatable
    {
        return Auth::user() ?? null;
    }

    /**
     * Login user
     *
     * @param array $userData
     * @return bool
     */
    public function loginUser(array $userData): bool
    {
        if($this->_getLoggedUser() == null)
            return Auth::attempt($userData);

        return true;
    }

    /**
     * Generate new token
     *
     * @param array $userData
     * @return null|string
     * @throws Exception
     */
    public function generateToken(array $userData): ?string
    {
        if($this->_getLoggedUser() == null){
            if($this->loginUser($userData) == false){
                throw new TokenException(__('auth.failed'), ResponseCodes::HTTP_UNAUTHORIZED);
            }
        }

        try {
            return $this->userRepository->generateToken($this->_getLoggedUser());
        } catch (\Exception $exception) {
            throw new TokenException(__('exception.userToken'), $exception->getCode());
        }
    }

}