<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsers extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_user' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'auto_increment' => true
            ],
            'id_prodi' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nim' => [
                'type' => "VARCHAR",
                'constraint' => 255
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->addForeignKey('id_prodi', 'program_studi', 'id_prodi');
        $this->forge->createTable('users');
    }


    public function down()
    {
        $this->forge->dropTable('users');
    }
}
