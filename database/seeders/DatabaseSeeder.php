<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        User::factory()->create([[
            'name' => 'Test User',
            'email' => 'test@example.com',
            'vip' => 'true',
            'password' => '123',
            'permission' => 'false',
        ],
        [
            'name' => 'Kiss Anna',
            'email' => 'anna@example.com',
            'vip' => 'true',
            'password' => '12223',
            'permission' => 'false',
        ],[
            'name' => 'Nagy Béla',
            'email' => 'bela@example.com',
            'vip' => 'false',
            'password' => 'ppp',
            'permission' => 'true',
        ]
        ]
    );
    }
}
