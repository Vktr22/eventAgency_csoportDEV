<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AgencySeeder::class,
            EventSeeder::class,
            ParticipateSeeder::class,
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'vip' => true,
            'password' => '123', // AUTO HASH a User model casts miatt
            'permission' => false,
        ]);

        User::create([
            'name' => 'Kiss Anna',
            'email' => 'anna@example.com',
            'vip' => true,
            'password' => '12223',
            'permission' => false,
        ]);

        User::create([
            'name' => 'Nagy Béla',
            'email' => 'bela@example.com',
            'vip' => false,
            'password' => 'ppp',
            'permission' => true,
        ]);
    }
}
