<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert(
        [
            'judul' => 'Jumanji',
            'deskripsi' => 'lorem ipsum.......',
        ]);
        Film::insert(
        [
            'judul' => 'Devils Swan',
            'deskripsi' => 'lorem ipsum.......'
        ]);
        Film::insert(
            [
                'judul' => 'Danur',
                'deskripsi' => 'lorem ipsum.......'
            ]);
    //
    }
}