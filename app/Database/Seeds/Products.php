<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Products extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'product_code' => $faker->uuid(),
                'product_name' => $faker->word(),
                'product_description' => $faker->sentence(),
                'product_picture' => $faker->imageUrl(640, 480, 'products', true),
                'product_stock' => $faker->numberBetween(0, 100),
                'product_price' => $faker->randomFloat(10000, 0, 10000000),
            ];

            $this->db->table('products')->insert($data);
        }
    }
}
