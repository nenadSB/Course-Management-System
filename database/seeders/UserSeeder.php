<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Trainer',
            'email' => 'trainer@example.com',
            'password' => Hash::make('password'),
            'role' => 'trainer',
        ]);

        User::create([
            'name' => 'Trainee',
            'email' => 'trainee@example.com',
            'password' => Hash::make('password'),
            'role' => 'trainee',
        ]);
    }
}