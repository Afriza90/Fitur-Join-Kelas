<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::query()->insert([
            [
                'id_kelas' => 2,
                'nama_materi' => 'HTML + CSS',
                'tanggal_dibuat' => '2023-06-23'
            ],
            [
                'id_kelas' => 2,
                'nama_materi' => 'React - Library Javascript',
                'tanggal_dibuat' => '2023-06-25'
            ],
            [
                'id_kelas' => 2,
                'nama_materi' => 'Web3',
                'tanggal_dibuat' => '2023-06-26'
            ]
        ]);
    }
}
