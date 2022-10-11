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
        ]);
        Obat::create([
            'nama' => 'Aceton Gadjah 50ml (per Botol)',
            'category_id' => 1,
            'slug' => 'aceton-gadjah-50ml-(per Botol)',
            'harga' => 10633,
            'stok' => 100,
        ]);
        Obat::create([
            'nama' => 'Kalpanax',
            'category_id' => 1,
            'slug' => 'kalpanax',
            'harga' => 15000,
            'stok' => 60,
        ]);
        Obat::create([
            'nama' => 'Obat Alergi CTM',
            'category_id' => 2,
            'slug' => 'obat-alergi-ctm',
            'harga' => 20000,
            'stok' => 50,
        ]);
        Obat::create([
            'nama' => 'Decolgen',
            'category_id' => 2,
            'slug' => 'decolgen',
            'harga' => 5000,
            'stok' => 45,
        ]);
        Obat::create([
            'nama' => 'Molexflu',
            'category_id' => 2,
            'slug' => 'molexflu',
            'harga' => 3500,
            'stok' => 100,
        ]);
        Obat::create([
            'nama' => 'Ennamax',
            'category_id' => 2,
            'slug' => 'ennamax',
            'harga' => 10000,
            'stok' => 50,
        ]);
        Obat::create([
            'nama' => 'Astifen',
            'category_id' => 2,
            'slug' => 'astifen',
            'harga' => 3500,
            'stok' => 20,
        ]);
        Obat::create([
            'nama' => 'Guamin',
            'category_id' => 2,
            'slug' => 'guamin',
            'harga' => 5200,
            'stok' => 43,
        ]);
        Obat::create([
            'nama' => 'Imboost',
            'category_id' => 1,
            'slug' => 'imboost',
            'harga' => 20000,
            'stok' => 150,
        ]);
        Obat::create([
            'nama' => 'Stimuno Forte',
            'category_id' => 1,
            'slug' => 'stimuno-forte',
            'harga' => 25000,
            'stok' => 350,
        ]);
        Obat::create([
            'nama' => 'Bestalin',
            'category_id' => 2,
            'slug' => 'bestalin',
            'harga' => 4700,
            'stok' => 171,
        ]);
        Obat::create([
            'nama' => 'Oradex',
            'category_id' => 2,
            'slug' => 'oradex',
            'harga' => 57000,
            'stok' => 157,
        ]);
        Obat::create([
            'nama' => 'Siladex Cough',
            'category_id' => 2,
            'slug' => 'siladex-cough',
            'harga' => 33000,
            'stok' => 230,
        ]);
        Obat::create([
            'nama' => 'Inalergi',
            'category_id' => 2,
            'slug' => 'inalergi',
            'harga' => 6500,
            'stok' => 270,
        ]);
        Obat::create([
            'nama' => 'Inclarin',
            'category_id' => 2,
            'slug' => 'inclarin',
            'harga' => 7500,
            'stok' => 180,
        ]);
        Obat::create([
            'nama' => 'Avocel',
            'category_id' => 2,
            'slug' => 'avocel',
            'harga' => 5000,
            'stok' => 170,
        ]);
    }
}
