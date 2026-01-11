<?php

namespace Database\Seeders;

use App\Models\EventModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       EventModel::create([
            'name' => 'Esemeny1',
            'agency_id' => '1',
            'limit' => '10',
            'date' => '2014-10-02',
            'location' => 'Budapest',
            'status' => '1',
        ]);
        EventModel::create([
            'name' => 'Esemeny2',
            'agency_id' => '2',
            'limit' => '20',
            'date' => '2024-01-20',
            'location' => 'London',
            'status' => '2',
        ]);
        EventModel::create([
            'name' => 'Esemeny3',
            'agency_id' => '3',
            'limit' => '30',
            'date' => '2026-01-11',
            'location' => 'Gent',
            'status' => '0',
        ]); 
    }
}
