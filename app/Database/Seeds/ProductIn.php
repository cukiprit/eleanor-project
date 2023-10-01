<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProductIn extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'Code_Product_IN' => $faker->uuid(),
                'date_in' => $faker->date(),
                'quantity' => $faker->numberBetween(0, 100),
            ];

            $this->db->table('product_in')->insert($data);
        }
    }
}
