<?php

namespace Database\Factories;

use App\Models\admin;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(2, true);

        return [
            'name' => $name,
            'head_desc' => $this->faker->sentence(6),
            'slug' => Str::slug($name),

            'desc' => $this->faker->sentence(),
            'admin_id' => admin::factory()->create()->id,

        ];
    }
}
