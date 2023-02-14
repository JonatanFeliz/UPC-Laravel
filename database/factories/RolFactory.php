<?php

namespace Database\Factories;

use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Rol>
 */
class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ //Hacer que se pongan dos roles, uno de cliente y el otro de admin, con sus descripciones
            'rol_name'     => $this->faker->firstName,
            'description'  => $this->faker->lastName,
        ];
    }
}
