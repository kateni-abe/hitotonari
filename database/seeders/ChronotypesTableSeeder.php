<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChronotypesTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Chronotype::factory(10)->create(); // 10個のChronotypeデータを作成
    }
}