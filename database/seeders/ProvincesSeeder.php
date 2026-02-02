<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('provinces')->insert([
            // Sumatra
            ['id' => 1, 'island_id' => 1, 'name' => 'Aceh'],
            ['id' => 2, 'island_id' => 1, 'name' => 'Sumatera Utara'],
            ['id' => 3, 'island_id' => 1, 'name' => 'Sumatera Barat'],
            ['id' => 4, 'island_id' => 1, 'name' => 'Riau'],
            ['id' => 5, 'island_id' => 1, 'name' => 'Kepulauan Riau'],
            ['id' => 6, 'island_id' => 1, 'name' => 'Jambi'],
            ['id' => 7, 'island_id' => 1, 'name' => 'Sumatera Selatan'],
            ['id' => 8, 'island_id' => 1, 'name' => 'Bengkulu'],
            ['id' => 9, 'island_id' => 1, 'name' => 'Lampung'],
            ['id' => 10, 'island_id' => 1, 'name' => 'Kepulauan Bangka Belitung'],

            // Jawa
            ['id' => 11, 'island_id' => 2, 'name' => 'DKI Jakarta'],
            ['id' => 12, 'island_id' => 2, 'name' => 'Banten'],
            ['id' => 13, 'island_id' => 2, 'name' => 'Jawa Barat'],
            ['id' => 14, 'island_id' => 2, 'name' => 'Jawa Tengah'],
            ['id' => 15, 'island_id' => 2, 'name' => 'DI Yogyakarta'],
            ['id' => 16, 'island_id' => 2, 'name' => 'Jawa Timur'],

            // Nusa Tenggara & Bali
            ['id' => 17, 'island_id' => 5, 'name' => 'Bali'],
            ['id' => 18, 'island_id' => 5, 'name' => 'Nusa Tenggara Barat'],
            ['id' => 19, 'island_id' => 5, 'name' => 'Nusa Tenggara Timur'],

            // Kalimantan
            ['id' => 20, 'island_id' => 3, 'name' => 'Kalimantan Barat'],
            ['id' => 21, 'island_id' => 3, 'name' => 'Kalimantan Tengah'],
            ['id' => 22, 'island_id' => 3, 'name' => 'Kalimantan Selatan'],
            ['id' => 23, 'island_id' => 3, 'name' => 'Kalimantan Timur'],
            ['id' => 24, 'island_id' => 3, 'name' => 'Kalimantan Utara'],

            // Sulawesi
            ['id' => 25, 'island_id' => 4, 'name' => 'Sulawesi Utara'],
            ['id' => 26, 'island_id' => 4, 'name' => 'Gorontalo'],
            ['id' => 27, 'island_id' => 4, 'name' => 'Sulawesi Tengah'],
            ['id' => 28, 'island_id' => 4, 'name' => 'Sulawesi Barat'],
            ['id' => 29, 'island_id' => 4, 'name' => 'Sulawesi Selatan'],
            ['id' => 30, 'island_id' => 4, 'name' => 'Sulawesi Tenggara'],

            // Maluku
            ['id' => 31, 'island_id' => 6, 'name' => 'Maluku'],
            ['id' => 32, 'island_id' => 6, 'name' => 'Maluku Utara'],

            // Papua
            ['id' => 33, 'island_id' => 7, 'name' => 'Papua'],
            ['id' => 34, 'island_id' => 7, 'name' => 'Papua Barat'],
            ['id' => 35, 'island_id' => 7, 'name' => 'Papua Selatan'],
            ['id' => 36, 'island_id' => 7, 'name' => 'Papua Tengah'],
            ['id' => 37, 'island_id' => 7, 'name' => 'Papua Pegunungan'],
            ['id' => 38, 'island_id' => 7, 'name' => 'Papua Barat Daya'],
        ]);
    }
}
