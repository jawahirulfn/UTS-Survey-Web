<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableQuestion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_question' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name_question' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
        ]);
        $this->forge->addKey('id_question', true);
        $this->forge->createTable('question');
    }


    public function down()
    {
        //
    }
}
