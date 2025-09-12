<?php

namespace Database\Factories;

use App\Models\admin;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\desc>
 */
class DescFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'announcement' => $this->faker->sentence(),
            'admin_id' => admin::factory()->create()->id,
            'department_id' => department::factory()->create()->id,
        ];
    }
}
