<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'role' => 'admin',
            ],

            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@agent.com',
                'password' => bcrypt('123456'),
                'role' => 'agent',
            ],

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('123456'),
                'role' => 'user',
            ]
        ]);
    }
}
