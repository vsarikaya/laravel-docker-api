<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFavoriteMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favorite_musics', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('category_music_id')->unsigned();
            $table->foreign('category_music_id')->references('id')->on('category_musics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_musics', function (Blueprint $table) {
            $table->dropForeign('user_favorite_musics_user_id_foreign');
            $table->dropForeign('user_favorite_musics_category_music_id_foreign');
        });

        Schema::dropIfExists('user_favorite_musics');
    }
}
