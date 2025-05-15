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
        $users = [
            [
                'name' => 'joao',
                'email' => 'joao@123.com',
                'password' => bcrypt('1234'),
                'permissions' => ['admin'],
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('password'),
                'permissions' => ['default'],
            ],
        ];

        foreach ($users as $user) {
            if (!Model::where('email', $user['email'])->first()) {

                $newUser =
                    Model::create([
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'password' => $user['password'],
                    ]);

                foreach ($user['permissions'] as $permission) {
                    $newUser->assignPermission($permission);
                }
            }
        }
    }
}
