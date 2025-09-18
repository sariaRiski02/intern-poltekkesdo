<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Support\Str;
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
        $name = $this->faker->name();
        return [
            'fullname' => $name,
            'slug' => Str::slug($name),
            'university' => $this->faker->company(),
            'faculty' => $this->faker->word(),
            'major' => $this->faker->word(),
            'address' => $this->faker->address(),
            'no_hp' => $this->faker->phoneNumber(),
            'birthday' => $this->faker->date(),
            'user_id' => User::factory()->create()->id,
        ];
    }
}
