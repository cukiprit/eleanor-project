<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_code' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
                'null' => false
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'product_description' => [
                'type' => 'TEXT'
            ],
            'product_picture' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'product_stock' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'default' => 0
            ],
            'product_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ]
        ]);

        $this->forge->addKey('product_code', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
