<?php

use App\Http\Controllers\ArtikelController;
use App\Models\Album_musik;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\Film;
use App\Models\DetailFilm;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PenulisController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/About', function () {
    $nama = "Julisya khaerina";
    $jenis_kelamin = "Perempuan";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "Mencari ilmu";
    return view('Biodata', compact('nama', 'jenis_kelamin', 'pendidikan_terakhir', 'pekerjaan'));
});

// parameter
Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample', compact('nama2'));
});

//menampilkan semua data
Route::get('siswa', function() {
    return view('siswa');
});

Route::get('sekolah', function() {
    return view('sekolah');
});

Route::get('album_musik', function() {
    return view('album_musik');
});

Route::get('film', function() {
    return view('film');
});

Route::get('film{id}', function(int $id) {
    return view('detail_film', ['film' => Film::findorFail($id)]);
});

// route with controller
Route::get('perkenalan',[Mycontroller::class,'introduce']);
Route::get('hewan',[Mycontroller::class,'animals']);

// route movie
Route::get('movie', [MovieController::class, 'getMovie'])->middleware('auth');
Route::get('movie/{id}', [MovieController::class, 'getMovieById']);

// route artikel
Route::get('artikel', [ArtikelController::class, 'getArtikel']);
Route::get('artikel/id/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route crud
Route::resource('penulis', PenulisController::class);
