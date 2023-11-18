<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductOut extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'code_product_out' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
                'null' => false,
            ],
            'date_out' => [
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

        $this->forge->addKey('code_product_out', true);
        $this->forge->addForeignKey('product_code', 'products', 'product_code', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_out');
    }

    public function down()
    {
        $this->forge->dropTable('product_out');
    }
}
