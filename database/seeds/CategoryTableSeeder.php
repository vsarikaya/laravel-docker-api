<?php

use Illuminate\Database\Seeder;
use App\Data\Model\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'order_number'  => 1,
                'name'          => 'Yağmur',
                'picture'       => 'yagmur.jpg',
                'created_at'    => now()
            ],
            [
                'order_number'  => 2,
                'name'          => 'Uyku',
                'picture'       => 'uyku.jpg',
                'created_at'    => now()
            ],
            [
                'order_number'  => 3,
                'name'          => 'Yoga',
                'picture'       => 'yoga.jpg',
                'created_at'    => now()
            ],
            [
                'order_number'  => 4,
                'name'          => 'Su',
                'picture'       => 'su.jpg',
                'created_at'    => now()
            ],
            [
                'order_number'  => 5,
                'name'          => 'Doğa',
                'picture'       => 'doga.jpg',
                'created_at'    => now()
            ]
        ]);
    }
}
