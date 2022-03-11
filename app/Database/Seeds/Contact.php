<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Contact extends Seeder
{
    public function run()
    {
        //
        $data = [
        'code' => 'darth',
        'company' => 'darth@theempire.com'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO contact", $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}