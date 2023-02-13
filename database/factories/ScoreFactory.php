<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'player_name' => fake()->name(),
            'level'       => $this->faker->numberBetween(1, 10),
            'points'      => $this->faker->numberBetween(1, 10000),
            'wins'        => $this->faker->numberBetween(1, 500),
            'lose'        => $this->faker->numberBetween(1, 500),
        ];
    }
}
