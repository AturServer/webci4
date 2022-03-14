<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'constraint' => '11',
            'auto_increment' => true,
        ],
        'code' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'company' => [
            'type' => 'VARCHAR',
            'constraint' => '225',
        ],
        'street' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'city' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'state' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'post_code' => [
            'type' => 'VARCHAR',
            'constraint' => '10',
        ],
        'phone' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
        ],
        'mobile' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
        ],
        'email' => [
            'type' => 'TEXT',
            'null' => true,
        ],         
        'shipping_address' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'billing_address' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'npwp' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'person' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'status' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
        ],
        'input_by' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
        ],
        'category' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
        ],
        'role' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],  
        'created_by' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
        ],
        'created_at' => [
             'type' => 'DATE',
        ],
        'updated_at' => [
             'type' => 'DATE',
        ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contacts');
        //
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}