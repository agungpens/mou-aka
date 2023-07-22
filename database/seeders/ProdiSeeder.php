<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_prodi' => 'Administrasi Server Dan Jaringan Komputer'],
            ['nama_prodi' => 'Penyutingan Audio Video'],
            ['nama_prodi' => 'Pengolahan Hasil Ternak Unggas'],
            ['nama_prodi' => 'Administrasi Perkantoran'],
        ];

        \App\Models\Prodi::insert($data);
    }
}
