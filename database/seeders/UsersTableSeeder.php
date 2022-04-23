<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([

        'name' => 'Ziyod',
        'role' => 'manager',
        'email' => 'ziyod_31@mail.ru',
        'password' => bcrypt('p@ssw0rd'),
        'email_verified_at' => now(),
    ]);
   }
}
