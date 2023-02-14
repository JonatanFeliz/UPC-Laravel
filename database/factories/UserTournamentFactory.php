<?php

namespace Database\Factories;

use App\Models\UserTournament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=UserTournament>
 */
class UserTournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'        => 1,
            'tournament_id'  => 1,
        ];
    }
}
