<?php

namespace App\Models;

use Database\Seeders\DetailFilmSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function DetailFilm() {
        return $this->hasOne(DetailFilmSeeder::class);
    }
    public function MediaFilm() {
        return $this->hasMany(MediaFilm::class);
    }

}
