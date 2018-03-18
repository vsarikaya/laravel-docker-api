<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Sistemde gerekli test kullanıcısı
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
    }
}
