<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 20.03.2018
 * Time: 00:23
 */

namespace App\Data\Model;


use Illuminate\Database\Eloquent\Model;

class UserFavoriteMusics extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_favorite_musics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_music_id', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

}