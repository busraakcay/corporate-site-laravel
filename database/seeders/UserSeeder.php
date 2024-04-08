<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $users = [
            [
                'name' => 'Mehmet Uçar',
                'username' => 'root',
                'phone' => '555 555 55 55',
                'email' => 'mehmetucar@example.com',
                'password' => '$2y$10$4LR/3ltwCe7qkT3WPs0nmu9TUC89ffUQL1N/Cos19Lnb/US9MYl6K',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
