<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 20.03.2018
 * Time: 01:35
 */

namespace App\Data\Repository\Interfaces;


interface IUserFavoriteMusicsRepository
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