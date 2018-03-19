<?php
/**
 * Created by PhpStorm.
 * User: VoLKaN
 * Date: 19.03.2018
 * Time: 22:52
 */

namespace App\Data\Model;


use Illuminate\Database\Eloquent\Model;

class CategoryMusics extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category_musics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'picture', 'sound_url', 'order_number', 'category_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Relation for Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relation for User Favorite Musics
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_favorite_musics()
    {
        return $this->hasMany(UserFavoriteMusics::class, 'category_music_id');
    }
}