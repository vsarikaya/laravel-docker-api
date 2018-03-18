<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 13:54
 */

namespace App\Data\Repository\Implementations;


use App\Data\Model\User;
use App\Data\Repository\{
    BaseRepository,
    Interfaces\IUserRepository
};
use Illuminate\Support\Collection;

/**
 * UserRepository
 *
 * @package App\Data\Repository\Implementations
 */
class UserRepository extends BaseRepository implements IUserRepository
{
    /**
     * Get all users list
     *
     * @return Collection
     */
    public function getUserList(): Collection
    {
        return User::all();
    }

}