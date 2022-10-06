<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mascotas>
 */
class MascotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'nombre'=>$this->faker->char,
            'raza'=>$this->faker->char,
            'tamaño'=>$this->faker->char,
            'edad'=>$this->faker->integer,
            'usuario_id'=> random (1,100),
        ];
    }
}
