<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelProdi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prodi' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_prodi' => [
                'type' => "VARCHAR",
                'constraint' => 255,
                'null' => false
            ],
            'detail_prodi' => [
                'constraint' => 255,
                'type' => "VARCHAR",
                'null' => true
            ]

        ]);
        $this->forge->addKey('id_prodi', true);
        $this->forge->createTable('program_studi');
    }

    public function down()
    {
        $this->forge->dropTable('program_studi');
    }
}
