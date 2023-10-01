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
                'Product_Code' => $faker->uuid(),
                'Product_name' => $faker->word(),
                'Product_Description' => $faker->sentence(),
                'Product_Picture' => $faker->imageUrl(640, 480, 'products', true),
                'Product_Stock' => $faker->numberBetween(0, 100),
                'Product_Price' => $faker->randomFloat(10000, 0, 10000000),
            ];

            $this->db->table('products')->insert($data);
        }
    }
}
