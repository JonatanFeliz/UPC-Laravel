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
            'player_name' => $this->faker->word(),
            'level'       => $this->faker->numberBetween(1, 10),
            'points'      => $this->faker->numberBetween(),
            'wins'        => $this->faker->numberBetween(),
            'lose'        => $this->faker->numberBetween(),
        ];
    }
}
