<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DetailFilm::insert ([
        'film_id' => 1,
        'code_film' => 'IEekWLFgC0lfb',
        'url_imdb' => 'https://www.youtube.com/live/x4sVzsbVuwc?si=P6WP-R24LLXTiqyU'
       ]);

       DetailFilm::insert ([
        'film_id' => 2,
        'code_film' => 'tt2787759',
        'url_imdb' => 'https://www.youtube.com/live/x4sVzsbVuwc?si=P6WP-R24LLXTiqyU'
       ]); 
       DetailFilm::insert ([
        'film_id' => 3,
        'code_film' => 'tt966868',
        'url_imdb' => 'https://www.youtube.com/live/x4sVzsbVuwc?si=P6WP-R24LLXTiqyU'
       ]); 
    }
}
