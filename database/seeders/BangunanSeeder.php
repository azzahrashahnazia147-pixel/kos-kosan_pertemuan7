<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BangunanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bangunans')->insert([
            [
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'luas_kamar' => 12.50,
                'jenis_kamar' => 'campuran',
                'is_full' => false,
                'harga' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alamat' => 'Gg. Mawar No. 5, Bandung',
                'luas_kamar' => 9.00,
                'jenis_kamar' => 'perempuan',
                'is_full' => true,
                'harga' => 800000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}