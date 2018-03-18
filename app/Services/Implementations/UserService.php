<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 15:44
 */

namespace App\Services\Implementations;

use App\Data\Repository\Interfaces\IUserRepository;
use App\Services\{
    BaseService,
    Interfaces\IUserService
};
use Illuminate\Support\Collection;

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
     * Get all users list
     *
     * @return Collection Users
     */
    public function getAllUsers(): Collection
    {
        return $this->userRepository->getUserList();
    }
}