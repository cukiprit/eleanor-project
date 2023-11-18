<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductIn extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'code_product_in' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
                'null' => false,
            ],
            'date_in' => [
                'type' => 'DATE',
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'product_code' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
            ],
        ]);

        $this->forge->addKey('code_product_in', true);
        $this->forge->addForeignKey('product_code', 'products', 'product_code', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_in');
    }

    public function down()
    {
        $this->forge->dropTable('product_in');
    }
}
