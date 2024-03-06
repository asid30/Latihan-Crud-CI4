<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\PesertaModel;

class PesertaSeeder extends Seeder
{
    public function run()
    {
        $pesertaModel = new PesertaModel();

        $pesertaModel->save([
            'Nama' => 'Abdilah Asyidiqi',
            'Kampus' => 'Universitas Lampung',
            'Jurusan' => 'Ilmu Komputer',
            'Posisi' => 'Fullstack Developer',
        ]);
    }
}
