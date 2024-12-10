<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\SchoolProfile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password'
        // ]);

        $this->call([
            // AlumniSeeder::class,
            SchoolProfileSeeder::class,
            LectureProfileSeeder::class,
            FacilitySeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CategoryPostSeeder::class,
        ]);

    }
}
