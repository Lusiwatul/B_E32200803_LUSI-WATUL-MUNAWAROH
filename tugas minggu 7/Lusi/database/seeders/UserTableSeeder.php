<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::insert([
            'name' => 'lusi',
            'email' => 'lusiwatul08@gmail.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
