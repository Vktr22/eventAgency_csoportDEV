<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        Agency::create([
            'name' => 'Agency1',
            'country' => 'Magyar',
            'type' => 'a',
        ]);

        Agency::create([
            'name' => 'Agency2',
            'country' => 'Olasz',
            'type' => 'a',
        ]);

        Agency::create([
            'name' => 'Agency3',
            'country' => 'Orosz',
            'type' => 'b',
        ]);
    }
}
