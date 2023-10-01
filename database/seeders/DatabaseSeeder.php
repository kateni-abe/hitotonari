<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)
            ->has(\App\Models\SixteenPersonality::factory())
            ->has(\App\Models\Chronotype::factory())
            ->create();

        $this->call(FriendshipsTableSeeder::class);
    }
}