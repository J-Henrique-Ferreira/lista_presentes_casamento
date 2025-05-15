<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product as Model;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Jogo de Panelas Tramontina',
                'description' => 'Conjunto de panelas antiaderentes com 5 peças',
                'image_url' => 'https://example.com/images/panelas.jpg',
                'address_store' => 'Loja Tramontina - Shopping Center Norte',
                'category' => 1, // Cozinha
            ],
            [
                'name' => 'Jogo de Cama Queen',
                'description' => 'Jogo de cama 300 fios, 100% algodão',
                'image_url' => 'https://example.com/images/cama.jpg',
                'address_store' => 'Casa & Conforto - Av. Paulista, 1000',
                'category' => 2, // Quarto
            ],
            [
                'name' => 'Smart TV 55 polegadas',
                'description' => 'Smart TV LED 4K com Wi-Fi integrado',
                'image_url' => 'https://example.com/images/tv.jpg',
                'address_store' => 'Magazine Eletrônicos - Shopping Ibirapuera',
                'category' => 3, // Eletrônicos
            ],
            [
                'name' => 'Liquidificador Philips',
                'description' => 'Liquidificador com 5 velocidades e função pulsar',
                'image_url' => 'https://example.com/images/liquidificador.jpg',
                'address_store' => 'Fast Shop - Shopping Eldorado',
                'category' => 1, // Cozinha
            ],
            [
                'name' => 'Ar Condicionado Split',
                'description' => 'Ar condicionado 12000 BTUs com controle remoto',
                'image_url' => 'https://example.com/images/ar.jpg',
                'address_store' => 'Casas Bahia - Av. Brigadeiro Faria Lima, 500',
                'category' => 4, // Eletrodomésticos
            ],
            [
                'name' => 'Conjunto de Taças',
                'description' => 'Kit com 6 taças para vinho tinto',
                'image_url' => 'https://example.com/images/tacas.jpg',
                'address_store' => 'Camicado - Shopping Morumbi',
                'category' => 1, // Cozinha
            ],
            [
                'name' => 'Máquina de Lavar',
                'description' => 'Máquina de lavar 11kg com diversas funções',
                'image_url' => 'https://example.com/images/maquina.jpg',
                'address_store' => 'Ponto Frio - Av. Rebouças, 2000',
                'category' => 4, // Eletrodomésticos
            ],
            [
                'name' => 'Jogo de Toalhas',
                'description' => 'Kit com 4 toalhas de banho e 4 de rosto',
                'image_url' => 'https://example.com/images/toalhas.jpg',
                'address_store' => 'Zelo Home - Shopping Anália Franco',
                'category' => 5, // Banheiro
            ],
            [
                'name' => 'Cafeteira Elétrica',
                'description' => 'Cafeteira programável com jarra térmica',
                'image_url' => 'https://example.com/images/cafeteira.jpg',
                'address_store' => 'Fast Shop - Shopping JK Iguatemi',
                'category' => 1, // Cozinha
            ],
            [
                'name' => 'Aspirador de Pó Robô',
                'description' => 'Aspirador inteligente com mapeamento e controle por app',
                'image_url' => 'https://example.com/images/aspirador.jpg',
                'address_store' => 'Magazine Luiza - Shopping Vila Olímpia',
                'category' => 4, // Eletrodomésticos
            ]
        ];

        foreach ($products as $product) {
            if (!Model::where('name', $product['name'])->exists()) {
                Model::create($product);
            }
        }
    }
}
