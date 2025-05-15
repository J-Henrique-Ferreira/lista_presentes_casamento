<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\User;
use Database\Seeders\Category;
use Database\Seeders\Product;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            User::class,
            Category::class,
            Product::class,
        ]);
    }
}
