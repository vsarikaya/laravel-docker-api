<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 20.03.2018
 * Time: 01:45
 */

namespace App\Services\Interfaces;


interface IUserFavoriteMusicsService
{
    /**
     * Add or remove exists musics from favorite list
     *
     * @param int $music_id
     * @param int $user_id
     * @return bool
     */
    public function addOrRemoveFromFavoriteList(int $music_id, int $user_id) : bool;
}