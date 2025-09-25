<?php

namespace Database\Factories;

use App\Models\intern;
use App\Models\visitor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'activity' => $this->faker->randomElement(['login', 'logout', 'register', 'create', 'update', 'delete', 'upload']),
            'name' => intern::inRandomOrder()->first()->fullname,
            'description' => $this->faker->paragraph(),
            'visitor_id' => visitor::inRandomOrder()->first()->id,
        ];
    }
}
