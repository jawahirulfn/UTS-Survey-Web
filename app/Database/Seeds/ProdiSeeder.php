<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_prodi' => 'Sistem Informasi',
            ],  [
                'nama_prodi' => 'Biologi',
            ], [
                'nama_prodi' => 'Matematika',
            ], [
                'nama_prodi' => 'Arsitektur',
            ], [
                'nama_prodi' => 'Teknik Lingkungan',
            ], [
                'nama_prodi' => 'Teknik Sipil',
            ], [
                'nama_prodi' => 'Ilmu Kelautan',
            ]
        ];

        $this->db->table('program_studi')->insertBatch($data);
    }
}
