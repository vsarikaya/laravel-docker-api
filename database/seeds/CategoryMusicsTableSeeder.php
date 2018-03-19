<?php

use App\Data\Model\{
    Category, CategoryMusics
};
use Illuminate\Database\Seeder;

class CategoryMusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Category::all() as $key => $category) {
            $category->musics()->saveMany([
                new CategoryMusics([
                    "order_number"  => 1,
                    "name"          => "Sound {$key}1",
                    "picture"       => "picture{$key}1.jpg",
                    "sound_url"     => "music{$key}1.mp3"
                ]),
                new CategoryMusics([
                    "order_number"  => 2,
                    "name"          => "Sound {$key}2",
                    "picture"       => "picture{$key}2.jpg",
                    "sound_url"     => "music{$key}2.mp3"
                ]),
                new CategoryMusics([
                    "order_number"  => 3,
                    "name"          => "Sound {$key}3",
                    "picture"       => "picture{$key}3.jpg",
                    "sound_url"     => "music{$key}3.mp3"
                ])
            ]);
        }

    }
}
