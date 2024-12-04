<?php

namespace Database\Factories;

use App\Models\Alumni;
use App\Models\AlumniYear;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumniAlumniYear>
 */
class AlumniAlumniYearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alumni_id' => Alumni::select('id'),
            'alumni_year_id' => AlumniYear::select('id')->orderByRaw("RAND()")->first(),
        ];
    }
}
