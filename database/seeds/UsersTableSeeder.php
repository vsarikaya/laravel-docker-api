<?php

use Illuminate\Database\Seeder;
use \App\Data\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Sistemde gerekli test kullanıcısı
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
    }
}
