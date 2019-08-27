<?php

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
            'role_id'=>'1',
            'name'=>'Mr. Admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password'=> bcrypt('bangladesh'),
        ]);DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Mr. Moderator',
            'username' => 'moderator',
            'email' => 'moderator@mail.com',
            'password'=> bcrypt('bangladesh'),
        ]);DB::table('users')->insert([
            'role_id'=>'3',
            'name'=>'Mr. User',
            'username' => 'user',
            'email' => 'user@mail.com',
            'password'=> bcrypt('bangladesh'),
        ]);
    }
}
