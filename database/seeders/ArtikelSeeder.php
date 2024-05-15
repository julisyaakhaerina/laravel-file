<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert(
        [
            'judul' => 'Stop Narkoba',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIl-lwsQ90UKezdoSVWsbyoSujgBNwu_DrWXMDpGiePw&s.jpg',
            'kategori' => 'Politik',
            'konten' => 'pengertian narkoba adalah zat atau obat yang berasal dari tanaman atau bukan tanaman, baik sintetis ataupun semi s
            intetis yang dapat menyebabkan penurunan atau perubahan kesadaran, hilangnya rasa, mengurangi bahkan sampai menghilangkan rasa nyeri, dan dapat menimbulkan ketergantungan
            Sayangi Hidupmu, Sayangi Orang Tuamu, Sayangi Keluargamu Dengan Hidup Anti Narkoba.',
            'penulis' => 'kemenparekraf.ri',
        ]);
        Artikel::insert(
        [
            'judul' => 'Gaya hidup berkelanjutan',
            'foto' => 'https://www.insancendekiamandiri.com/file/produk/34de23b88d4d90fd1f36975bb81a0f15.jpg',
            'kategori' => 'Masyarakat',
            'konten' => 'Gaya hidup berkelanjutan lebih dari menghindari plastik sekali pakai. 
             Terdapat banyak contoh gaya hidup berkelanjutan yang bisa diterapkan dalam kehidupan sehari-hari,
             seperti membuang sampah pada tempatnya, menggunakan transportasi publik, dan menggunakan listrik sesuai kebutuhan. ',
            'penulis' => 'WRI Indonesia',
        ]);
        Artikel::insert(
        [
            'judul' => 'Stop Bullying',
            'foto' => 'https://i.pinimg.com/736x/72/83/65/728365bc66f6532f6a02a4c056ecaf72.jpg',
            'kategori' => 'Kehidupan',
            'konten' => 'Stop Bullying poster and kid suffering from abuse.
            Bentuk-bentuk bullying adalah bullying fisik, verbal, dan bullying tidak langsung. 
            Bullying fisik misalnya menonjok,mendorong,memukul,menendang, dan menggigit; bullying',
            'penulis' => 'Sutterstock',
        ]);

          }
}