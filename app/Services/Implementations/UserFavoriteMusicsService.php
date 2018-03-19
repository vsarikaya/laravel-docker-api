<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 20.03.2018
 * Time: 01:46
 */

namespace App\Services\Implementations;


use App\Data\Repository\Interfaces\IUserFavoriteMusicsRepository;
use App\Exceptions\NotFoundRecordException;
use App\Services\Interfaces\IUserFavoriteMusicsService;
use Illuminate\Support\Facades\Log;

class UserFavoriteMusicsService implements IUserFavoriteMusicsService
{
    private $userFavoriteMusicsRepository;

    /**
     * UserFavoriteMusicsService constructor injection
     *
     * @param IUserFavoriteMusicsRepository $IUserFavoriteMusicsRepository
     */
    public function __construct(IUserFavoriteMusicsRepository $IUserFavoriteMusicsRepository)
    {
        $this->userFavoriteMusicsRepository = $IUserFavoriteMusicsRepository;
    }

    /**
     * Add or remove exists musics from favorite list
     *
     * @param int $music_id
     * @param int $user_id
     * @return bool
     * @throws NotFoundRecordException
     */
    public function addOrRemoveFromFavoriteList(int $music_id, int $user_id): bool
    {
        Log::channel('api')->info("UserFavoriteMusicsService called --> Request addOrRemoveFromFavoriteList() function");

        try {
            Log::channel('api')->info("UserFavoriteMusicsService called --> Return bool by music id: $music_id user id: $user_id");

            return $this->userFavoriteMusicsRepository->addOrRemoveFromFavoriteList($music_id, $user_id);
        } catch (\Exception $exception) {
            throw new NotFoundRecordException(__('exception.notFoundRecord'), $exception->getCode());
        }
    }
}