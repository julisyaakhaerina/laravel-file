<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'karakter ',
            'url_media' => 'https://images.app.goo.gl/kHFoF3pNjN4xqJA47',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'karakter',
            'url_media' => 'https://images.app.goo.gl/3p17gjBd6TAHsgW6A',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'barbie',
            'url_media' => 'https://images.app.goo.gl/Fb9Cf4PunopYjxbf7',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'barbie',
            'url_media' => 'https://images.app.goo.gl/RXALuWDGEMBEfKB86',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'barbie',
            'url_media' => 'https://images.app.goo.gl/cftP4AEiwPnjxHJYA',
        ]);
        MediaFilm::insert([
            'film_id' => 6,
            'media_type' => 6,
            'media title' => 'Supper wings lomba origami besar dijepang',
            'url_media' => 'https://youtu.be/kT6MpIuhR5I?si=fZ5_C2Q0aO4Opojd',
        ]);
        MediaFilm::insert([
            'film_id' => 7,
            'media_type' => 7,
            'media title' => 'upin ipin perut ehsan',
            'url_media' => 'https://youtu.be/eSzZ1jkujgk?si=j45YvEsWlkdeH6vF',
        ]);
        MediaFilm::insert([
            'film_id' => 8,
            'media_type' => 8,
            'media title' => 'upin dan ipin untuk prestasi',
            'url_media' => 'https://youtu.be/gSjaUSMy_Mo?si=nWBccqvecXv7Q5nR',
        ]);
        MediaFilm::insert([
            'film_id' => 9,
            'media_type' => 9,
            'media title' => 'upin ipin ultranab ribut',
            'url_media' => 'https://youtu.be/2xXnVTrPDzw?si=irAo8EtlnC841Nne',
        ]);
        MediaFilm::insert([
            'film_id' => 10,
            'media_type' => 10,
            'media title' => 'Helper cars cartoon full episodes',
            'url_media' => 'https://www.youtube.com/live/74uJUbl9E54?si=3_WX-N4i6FRSOetD',
        ]);
        
        MediaFilm::insert([
            'film_id' => 11,
            'media_type' => 11,
            'media title' => 'BEST Educational Nursery Rhymes & Kids Songs Collection',
            'url_media' => 'https://www.youtube.com/live/aRtLfT0Z21Q?si=UJz4L3yExzumOegh',
        ]);
        MediaFilm::insert([
            'film_id' => 12,
            'media_type' => 12,
            'media title' => 'Momen Putri Duyung Terbaik Barbie! ',
            'url_media' => 'https://youtu.be/Z34E07cM0bE?si=trzj_mfz5rHflrVZ',
        ]);
        MediaFilm::insert([
            'film_id' => 13,
            'media_type' => 13,
            'media title' => 'Petualangan fantasi Barbie',
            'url_media' => 'https://youtu.be/oE4sxZy6QsI?si=SJB9E4foRGeNBSpH',
        ]);
        MediaFilm::insert([
            'film_id' => 14,
            'media_type' => 14,
            'media title' => 'Maraton Petualangan Bersama Barbie! ',
            'url_media' => 'https://youtu.be/Onv32-BYk7o?si=fsGLvoqZy2mRjvcx',
        //
        ]);
        MediaFilm::insert([
            'film_id' => 15,
            'media_type' => 15,
            'media title' => 'Sepatu Merah + Dua Belas Putri Menari ',
            'url_media' => 'https://youtu.be/0ZPJkp3IV5Q?si=IZrzlyVVCFeNI0_T',
        //
        ]);
    }
}
