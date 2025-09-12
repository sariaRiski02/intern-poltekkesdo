<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\intern>
 */
class InternFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'university' => $this->faker->company(),
            'faculty' => $this->faker->word(),
            'major' => $this->faker->word(),
            'address' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber(),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending', 'rejected', 'accepted', 'completed']),
            'user_id' => User::factory()->create()->id,
        ];
    }
}
