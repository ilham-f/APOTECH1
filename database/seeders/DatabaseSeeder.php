<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Category::create([
            'nama' => 'Obat Bebas',
            'slug' => 'obat-bebas'
        ]);

        Category::create([
            'nama' => 'Obat Bebas Terbatas',
            'slug' => 'obat-bebas-terbatas'
        ]);

        Category::create([
            'nama' => 'Obat Keras',
            'slug' => 'obat-keras'
        ]);

        \App\Models\Obat::factory(8)->create();


    }
}
