<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ['nama_prodi' => 'Administrasi Server Dan Jaringan Komputer'],
        // ['nama_prodi' => 'Penyutingan Audio Video'],
        // ['nama_prodi' => 'Pengolahan Hasil Ternak Unggas'],
        // ['nama_prodi' => 'Administrasi Perkantoran'],

        //  ['nama_role' => 'Admin'],
        //     ['nama_role' => 'Dosen'],
        //     ['nama_role' => 'Staff / Karyawan'],
        //     ['nama_role' => 'Kaprodi'],
        $data = [
            // admin
            [
                'role_id' => '1',
                'prodi_id' => null,
                'nama' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('admin'),
            ],
            // dosen
            [
                'role_id' => '2',
                'prodi_id' => '1',
                'nama' => 'dosenasjk',
                'username' => 'dosenasjk',
                'password' => bcrypt('dosenasjk'),
            ],
            // staf / karyawan
            [
                'role_id' => '3',
                'prodi_id' => '1',
                'nama' => 'userasjk',
                'username' => 'userasjk',
                'password' => bcrypt('userasjk'),
            ],
            // kaprodi
            [
                'role_id' => '4',
                'prodi_id' => '1',
                'nama' => 'kaprodiasjk',
                'username' => 'kaprodiasjk',
                'password' => bcrypt('kaprodiasjk'),
            ],

        ];

        \App\Models\User::insert($data);
    }
}
