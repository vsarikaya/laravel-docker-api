<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 18.03.2018
 * Time: 13:54
 */

namespace App\Data\Repository\Implementations;

use App\Data\Repository\{
    BaseRepository,
    Interfaces\IUserRepository
};
use \Illuminate\Contracts\Auth\Authenticatable;

/**
 * UserRepository
 *
 * @package App\Data\Repository\Implementations
 */
class UserRepository extends BaseRepository implements IUserRepository
{
    /**
     * Generate new user token
     *
     * @param Authenticatable $auth
     * @return null|string
     */
    public function generateToken(Authenticatable $auth): ?string
    {
        return $auth->createToken('MyApp')->accessToken;
    }
}