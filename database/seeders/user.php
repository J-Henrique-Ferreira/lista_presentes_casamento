<?php

namespace Database\Seeders;

use App\Models\User as Model;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [
                'name' => 'joao',
                'email' => 'joao@123.com',
                'password' => bcrypt('1234'),
            ],
            // [
            //     'name' => 'Jane Smith',
            //     'email' => 'jane@example.com',
            //     'password' => bcrypt('password'),
            // ],
            // [
            //     'name' => 'Bob Johnson',
            //     'email' => 'bob@example.com',
            //     'password' => bcrypt('password'),
            // ],
            // [
            //     'name' => 'Alice Williams',
            //     'email' => 'alice@example.com',
            //     'password' => bcrypt('password'),
            // ],
            // [
            //     'name' => 'Charlie Brown',
            //     'email' => 'charlie@example.com',
            //     'password' => bcrypt('password'),
            // ],
            // [
            //     'name' => 'David Lee',
            //     'email' => 'david@example.com',
            //     'password' => bcrypt('password'),
            // ]
        ];



        foreach ($users as $user) {
            Model::create($user);
        }
    }
}
