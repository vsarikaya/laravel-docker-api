<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_musics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('picture');
            $table->string('sound_url');
            $table->integer('order_number');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('restrict');

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
            $table->dropForeign('category_musics_category_id_foreign');
        });

        Schema::dropIfExists('category_musics');
    }
}
