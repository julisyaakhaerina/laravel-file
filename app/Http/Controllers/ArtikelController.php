<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
     public function getArtikel()
     {
         $artikels = Artikel::all();
         return view('artikel.index', compact('artikels'));
     }
 
     public function getArtikelById($id)
     {
         $artikel = Artikel::findOrFail($id);
         return view('artikel.show', compact('artikel'));
     }

     public function getArtikelByKategori($kategori) 
     {
        $artikels = Artikel::where('kategori', $kategori)->get();
        return view('artikel.kategori', compact('artikels'));
     }

}