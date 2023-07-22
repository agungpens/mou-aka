<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_role' => 'Admin'],
            ['nama_role' => 'Dosen'],
            ['nama_role' => 'Staff / Karyawan'],
            ['nama_role' => 'Kaprodi'],
        ];

        \App\Models\Role::insert($data);
    }
}
