<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::firstOrNew([
            'email' => env('KELASQU_ADMIN_EMAIL', 'admin@kelasqu.test'),
        ]);
        $admin->forceFill([
            'name' => 'Admin Kelasqu',
            'password' => Hash::make(env('KELASQU_ADMIN_PASSWORD', 'kelasqu123!')),
            'role' => 'admin',
        ])->save();

        $courses = [
            ['title' => 'UI/UX Design dari Nol', 'category' => 'Desain', 'instructor' => 'Nadia Putri', 'level' => 'Pemula', 'duration' => '8 jam', 'lessons' => 24, 'students' => 1240, 'rating' => 4.9, 'accent' => 'violet'],
            ['title' => 'Full-Stack Web dengan Laravel', 'category' => 'Teknologi', 'instructor' => 'Rizky Pratama', 'level' => 'Menengah', 'duration' => '12 jam', 'lessons' => 36, 'students' => 986, 'rating' => 4.9, 'accent' => 'blue'],
            ['title' => 'Strategi Digital Marketing', 'category' => 'Bisnis', 'instructor' => 'Sarah Amelia', 'level' => 'Pemula', 'duration' => '6 jam', 'lessons' => 18, 'students' => 752, 'rating' => 4.8, 'accent' => 'orange'],
            ['title' => 'Data Analytics dengan Python', 'category' => 'Teknologi', 'instructor' => 'Dimas Saputra', 'level' => 'Menengah', 'duration' => '10 jam', 'lessons' => 30, 'students' => 643, 'rating' => 4.9, 'accent' => 'green'],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['title' => $course['title']], $course);
        }
    }
}
