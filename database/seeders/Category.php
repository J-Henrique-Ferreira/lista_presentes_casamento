<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category as Model;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Cozinha'],
            ['name' => 'Quarto'],
            ['name' => 'Eletrônicos'],
            ['name' => 'Banheiro'],
            ['name' => 'Eletrodomésticos'],
        ];

        foreach ($categories as $category) {
            if (!Model::where('name', $category['name'])->exists()) {
                Model::create($category);
            }
        }
    }
}
