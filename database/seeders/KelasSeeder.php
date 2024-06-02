<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::query()->insert([
            [
                'id_pengguna' => 1,
                'uuid' => Str::uuid(),
                'nama_kelas' => 'Statistika Probabilitas',
                'nama_singkat' => 'S&P',
                'deskripsi' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'id_pengguna' => 1,
                'uuid' => Str::uuid(),
                'nama_kelas' => 'Web Development',
                'nama_singkat' => 'PBW',
                'deskripsi' => 'Lorem ipsum dolor sit amet'
            ]
        ]);
    }
}
