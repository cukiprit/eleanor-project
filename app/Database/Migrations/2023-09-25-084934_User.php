<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => array('Super-Admin', 'Admin-1', 'Admin-2'),
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ]
        ]);

        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
