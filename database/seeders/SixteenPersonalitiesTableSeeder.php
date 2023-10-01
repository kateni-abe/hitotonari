<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SixteenPersonalitiesTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\SixteenPersonality::factory(10)->create(); // 10個のSixteenPersonalityデータを作成
    }
}