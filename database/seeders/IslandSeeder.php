<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IslandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('islands')->insert([
            ['id' => 1, 'name' => 'Sumatra'],
            ['id' => 2, 'name' => 'Jawa'],
            ['id' => 3, 'name' => 'Kalimantan'],
            ['id' => 4, 'name' => 'Sulawesi'],
            ['id' => 5, 'name' => 'Nusa Tenggara & Bali'],
            ['id' => 6, 'name' => 'Maluku'],
            ['id' => 7, 'name' => 'Papua'],
        ]);
    }
}
