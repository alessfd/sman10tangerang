<?php

namespace Database\Seeders;

use App\Models\Alumni;
use App\Models\AlumniAlumniYear;
use App\Models\AlumniYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlumniYear::factory(5)->has(Alumni::factory(240))->create();
    }
}
