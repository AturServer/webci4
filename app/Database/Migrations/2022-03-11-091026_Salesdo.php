<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Salesdo extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
        'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true,
        ],
        'blog_title' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
        ],
        'blog_description' => [
        'type' => 'TEXT',
        'null' => true,
        ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('salesDo');  
    }

    public function down()
    {
        //
        $this->forge->dropTable('salesDo');
    }
}