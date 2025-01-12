<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        // Create a test user
        $user = User::create([
            'name' => 'Test Trainer',
            'email' => 'trainer@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create some test courses
        Course::create([
            'title' => 'Introduction to Laravel',
            'description' => 'Learn the basics of Laravel.',
            'trainer_id' => $user->id,
        ]);

        Course::create([
            'title' => 'Advanced Laravel Techniques',
            'description' => 'Master advanced Laravel concepts.',
            'trainer_id' => $user->id,
        ]);
    }
}