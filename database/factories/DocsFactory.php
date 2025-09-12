<?php

namespace Database\Factories;

use App\Models\intern;
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
            'transcript' => $this->faker->unique()->md5 . '.pdf',
            'application_letter' => $this->faker->unique()->md5 . '.pdf',
            'cv' => $this->faker->unique()->md5 . '.pdf',
            'intern_id' => intern::factory()->create()->id,
        ];
    }
}
