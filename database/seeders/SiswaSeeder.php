<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert(
            [
                'nama'  => 'Julisya khaerina',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin'  => 0
            ]
         );
         Siswa::insert(
            [
                'nama'  => 'rina',
                'kelas' => 'XI RPL 3',
                'jenis_kelamin'  => 0
            ]
         );
         Siswa::insert(
            [
                'nama'  => 'Julisya',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin'  => 0
            ]
         );
    }
}
