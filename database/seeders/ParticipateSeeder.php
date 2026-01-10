<?php

namespace Database\Seeders;

use App\Models\Participate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participate::factory()->createMany([
    [
        'event_id' => 1,
        'user_id' => 2,
        'present' => true,
    ],
    [
        'event_id' => 2,
        'user_id' => 1,
        'present' => false,
    ],
    [
        'event_id' => 3,
        'user_id' => 3,
        'present' => true,
    ],
]);

    }
}
