<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\type_usuarios>
 */
class TypeUsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->char,
            'puesto'=>$this->faker->char,
            'typeuser_id'=> random (1,100),

        ];
    }
}
