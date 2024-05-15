<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Sekolah::insert(
            [
                'nama'  => 'SMK ASSALAAM BANDUNG',
                'alamat' => 'Jl. Cibaduyut',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMK BANDUNG SELATAN',
                'alamat' => 'Jl. Cibaduyut',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMK AQUAVITAE',
                'alamat' => 'Jl. Cibaduyut',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMK PASUNDAN 1',
                'alamat' => 'Kota Bandung',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMK CIMAHI',
                'alamat' => 'Kota Cimahi',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMKN 1 KOTA BANDUNG',
                'alamat' => 'Kota Bandung',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMKN 4 BANDUNG',
                'alamat' => 'Kota Bandung',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMK Prakarya Internasional',
                'alamat' => 'Kota Bandung',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMKN 12 KOTA BANDUNG',
                'alamat' => 'Kota Bandung',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );
         Sekolah::insert(
            [
                'nama'  => 'SMKN 7 KOTA BANDUNG',
                'alamat' => 'Kota Bandung',
                'email'  => 0,
                'telepon'  => 0,
                'status' => 'aktif',
            ]
         );

    }
}
