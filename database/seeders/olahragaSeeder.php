<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class olahragaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('olahragas')->insert([
            'nama' => 'Futsal',
            'gambar' => 'futsal.png',
        ]);
        DB::table('olahragas')->insert([
            'nama' => 'Basket',
            'gambar' => 'basket.png',
        ]);
        DB::table('olahragas')->insert([
            'nama' => 'Badminton',
            'gambar' => 'badminton.png',
        ]);
    }
}
