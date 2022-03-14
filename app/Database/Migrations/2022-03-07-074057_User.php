<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
    $this->forge->addField([
    'id' => [
        'type' => 'INT',
        'constraint' => '10 ',
        'auto_increment' => true,
    ],
    'name' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
    ],
    'email' => [
         'type' => 'TEXT',
         'null' => true,
    ],
    'pass' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
    ],
    'role' => [
         'type' => 'VARCHAR',
         'constraint' => '100',
    ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('users');
    
    }

    public function down()
    {
    $this->forge->dropTable('users');
    }
}