<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesertaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Nama' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'Kampus' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'Jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'Posisi' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('peserta');
    }

    public function down()
    {
        $this->forge->dropTable('peserta', true);
    }
}
