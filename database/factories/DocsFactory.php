<?php

namespace Database\Factories;

use App\Models\intern;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\docs>
 */
class DocsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->unique()->slug,
            'transcript' => $this->faker->unique()->md5 . '.pdf',
            'application_letter' => $this->faker->unique()->md5 . '.pdf',
            'cv' => $this->faker->unique()->md5 . '.pdf',
            'status' => $this->faker->randomElement(['pending', 'rejected', 'accepted', 'completed']),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'department_id' => department::InRandomOrder()->first()->id,
            'intern_id' => intern::factory()->create()->id,
        ];
    }
}
