<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Obat::factory(12)->create();

        Obat::create([
            'nama' => 'Amoxicillin',
            'category_id' => 2,
            'slug' => 'amoxicillin',
            'harga' => 15000,
            'stok' => 200,
            'image' => 'amoxicillin.jpg'
        ]);
        Obat::create([
            'nama' => 'Aceton Gadjah 50ml (per Botol)',
            'category_id' => 1,
            'slug' => 'aceton-gadjah-50ml-(per botol)',
            'harga' => 10633,
            'stok' => 100,
            'image' => 'aceton-gadjah-50ml-(per botol).jpg'
        ]);
        Obat::create([
            'nama' => 'Kalpanax',
            'category_id' => 1,
            'slug' => 'kalpanax',
            'harga' => 15000,
            'stok' => 60,
            'image' => 'kalpanax.jpg'
        ]);
        Obat::create([
            'nama' => 'Obat Alergi CTM',
            'category_id' => 2,
            'slug' => 'obat-alergi-ctm',
            'harga' => 20000,
            'stok' => 50,
            'image' => 'obat-alergi-ctm.jpg'

        ]);
        Obat::create([
            'nama' => 'Decolgen',
            'category_id' => 2,
            'slug' => 'decolgen',
            'harga' => 5000,
            'stok' => 45,
            'image' => 'decolgen.jpg'
        ]);
        Obat::create([
            'nama' => 'Molexflu',
            'category_id' => 2,
            'slug' => 'molexflu',
            'harga' => 3500,
            'stok' => 100,
            'image' => 'molexflu.jpg'
        ]);
        Obat::create([
            'nama' => 'Ennamax',
            'category_id' => 2,
            'slug' => 'ennamax',
            'harga' => 10000,
            'stok' => 50,
            'image' => 'ennamax.jpg'
        ]);
        Obat::create([
            'nama' => 'Astifen',
            'category_id' => 2,
            'slug' => 'astifen',
            'harga' => 3500,
            'stok' => 20,
            'image' => 'astifen.jpg'
        ]);
        Obat::create([
            'nama' => 'Guamin',
            'category_id' => 2,
            'slug' => 'guamin',
            'harga' => 5200,
            'stok' => 43,
            'image' => 'guamin.jpg'
        ]);
        Obat::create([
            'nama' => 'Imboost',
            'category_id' => 1,
            'slug' => 'imboost',
            'harga' => 20000,
            'stok' => 150,
            'image' => 'imboost.jpg'
        ]);
        Obat::create([
            'nama' => 'Stimuno Forte',
            'category_id' => 1,
            'slug' => 'stimuno-forte',
            'harga' => 25000,
            'stok' => 350,
            'image' => 'stimuno-forte.jpg'
        ]);
        Obat::create([
            'nama' => 'Bestalin',
            'category_id' => 2,
            'slug' => 'bestalin',
            'harga' => 4700,
            'stok' => 171,
            'image' => 'bestalin.jpg'
        ]);
        Obat::create([
            'nama' => 'Oradex',
            'category_id' => 2,
            'slug' => 'oradex',
            'harga' => 57000,
            'stok' => 157,
            'image' => 'oradex.jpg'
        ]);
        Obat::create([
            'nama' => 'Siladex Cough',
            'category_id' => 2,
            'slug' => 'siladex-cough',
            'harga' => 33000,
            'stok' => 230,
            'image' => 'siladex-cough.jpg'
        ]);
        Obat::create([
            'nama' => 'Inalergi',
            'category_id' => 2,
            'slug' => 'inalergi',
            'harga' => 6500,
            'stok' => 270,
            'image' => 'inalergi.jpg'
        ]);
        Obat::create([
            'nama' => 'Inclarin',
            'category_id' => 2,
            'slug' => 'inclarin',
            'harga' => 7500,
            'stok' => 180,
            'image' => 'inclarin.jpg'
        ]);
        Obat::create([
            'nama' => 'Avocel',
            'category_id' => 2,
            'slug' => 'avocel',
            'harga' => 5000,
            'stok' => 170,
            'image' => 'avocel.jpg'
        ]);
    }
}
