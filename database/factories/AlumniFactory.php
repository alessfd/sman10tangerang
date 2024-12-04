<?php

namespace Database\Factories;

use App\Models\AlumniYear;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumni>
 */
class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numerify('###########'),
            'name' => $this->faker->name,
            'alumni_year_id' => AlumniYear::select('id')->orderByRaw("RAND()")->first(),
        ];
    }
}
