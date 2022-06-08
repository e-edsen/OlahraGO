<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Lapangan BTK',
            'gambar' => 'futsal.jpg',
            'olahraga_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama' => 'A Futsal',
            'gambar' => 'futsal.jpg',
            'olahraga_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama' => 'Gor Jayakarsa',
            'gambar' => 'futsal.jpg',
            'olahraga_id' => 1,
        ]);


        DB::table('products')->insert([
            'nama' => 'Gor Losers',
            'gambar' => 'basket.jpg',
            'olahraga_id' => 2,
        ]);
        DB::table('products')->insert([
            'nama' => 'Basket Academy Arena',
            'gambar' => 'basket.jpg',
            'olahraga_id' => 2,
        ]);
        DB::table('products')->insert([
            'nama' => 'KRL Arena',
            'gambar' => 'basket.jpg',
            'olahraga_id' => 2,
        ]);


        DB::table('products')->insert([
            'nama' => 'Gor SN',
            'gambar' => 'badminton.jpg',
            'olahraga_id' => 3,
        ]);
        DB::table('products')->insert([
            'nama' => 'Gor Immortal',
            'gambar' => 'badminton.jpg',
            'olahraga_id' => 3,
        ]);
        DB::table('products')->insert([
            'nama' => 'Diamond Arena',
            'gambar' => 'badminton.jpg',
            'olahraga_id' => 3,
        ]);
    }
}
