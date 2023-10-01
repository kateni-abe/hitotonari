<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSixteensPersonalityTypesTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['type' => 'INTJ', 'description' => 'The Architect - Imaginative and strategic thinkers, with a plan for everything.'],
            ['type' => 'INTP', 'description' => 'The Logician - Innovative inventors with an unquenchable thirst for knowledge.'],
            ['type' => 'ENTJ', 'description' => 'The Commander - Bold, imaginative and strong-willed leaders, always finding a way – or making one.'],
            ['type' => 'ENTP', 'description' => 'The Debater - Smart and curious thinkers who cannot resist an intellectual challenge.'],
            ['type' => 'INFJ', 'description' => 'The Advocate - Quiet and mystical, yet very inspiring and tireless idealists.'],
            ['type' => 'INFP', 'description' => 'The Mediator - Poetic, kind and altruistic people, always eager to help a good cause.'],
            ['type' => 'ENFJ', 'description' => 'The Protagonist - Charismatic and inspiring leaders, able to mesmerize their listeners.'],
            ['type' => 'ENFP', 'description' => 'The Campaigner - Enthusiastic, creative and sociable free spirits, who can always find a reason to smile.'],
            ['type' => 'ISTJ', 'description' => 'The Inspector - Practical and fact-minded individuals, whose reliability cannot be doubted.'],
            ['type' => 'ISFJ', 'description' => 'The Defender - Very dedicated and warm protectors, always ready to defend their loved ones.'],
            ['type' => 'ESTJ', 'description' => 'The Executive - Excellent administrators, unsurpassed at managing things – or people.'],
            ['type' => 'ESFJ', 'description' => 'The Caregiver - Extraordinarily caring, social and popular people, always eager to help.'],
            ['type' => 'ISTP', 'description' => 'The Craftsman - Bold and practical experimenters, masters of all kinds of tools.'],
            ['type' => 'ISFP', 'description' => 'The Artist - Flexible and charming artists, always ready to explore and experience something new.'],
            ['type' => 'ESTP', 'description' => 'The Doer - Smart, energetic and very perceptive people, who truly enjoy living on the edge.'],
            ['type' => 'ESFP', 'description' => 'The Performer - Spontaneous, energetic and enthusiastic people – life is never boring around them.'],
        ];

        foreach ($data as $item) {
            DB::table('info_sixteens_personality_types')->insert([
                'type' => $item['type'],
                'description' => $item['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}