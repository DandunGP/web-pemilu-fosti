<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Leader;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('password')
        // ]);

        User::create([
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'email' => 'test2@example.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'email' => 'test3@example.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'email' => 'test4@example.com',
            'password' => Hash::make('password')
        ]);

        Leader::create([
            'name' => 'Leader 1',
            'vision_mission' => 'mencari satu'
        ]);

        Leader::create([
            'name' => 'Leader 2',
            'vision_mission' => 'mencari dua'
        ]);

    }
}