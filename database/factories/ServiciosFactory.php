<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\servicios>
 */
class ServiciosFactory extends Factory
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
            'baño'=>$this->faker->integer,
            'paseo'=>$this->faker->char,
            'atencion_medica'=>$this->faker->integer,
            'entrenamiento'=>$this->faker->char,
            'costo'=>$this->faker->double
        ];
    }
}
