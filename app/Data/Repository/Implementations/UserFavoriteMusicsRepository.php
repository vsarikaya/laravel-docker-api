<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 20.03.2018
 * Time: 01:37
 */

namespace App\Data\Repository\Implementations;


use App\Data\Model\UserFavoriteMusics;
use App\Data\Repository\Interfaces\IUserFavoriteMusicsRepository;
use Illuminate\Support\Facades\Log;

class UserFavoriteMusicsRepository implements IUserFavoriteMusicsRepository
{
    /**
     * Add or remove exists musics from favorite list
     *
     * @param int $music_id
     * @param int $user_id
     * @return bool
     */
    public function addOrRemoveFromFavoriteList(int $music_id, int $user_id): bool
    {
        $userFavoriteMusicInstance = UserFavoriteMusics::where('category_music_id', $music_id)->where('user_id', $user_id);
        if($userFavoriteMusicInstance->first() == null){
            if(UserFavoriteMusics::create(['category_music_id' => $music_id, 'user_id' => $user_id]))
                return true;
            else
                return false;

        }

        return $userFavoriteMusicInstance->delete();
    }
}