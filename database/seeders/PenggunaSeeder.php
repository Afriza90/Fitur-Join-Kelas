<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::query()->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'nama_depan' => 'Ananda',
            'nama_belakang' => 'Rizky Kurniawan'
        ]);
    }
}
