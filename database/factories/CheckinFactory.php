<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\checkin>
 */
class CheckinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //     'fecha_entrada'=>$this->faker->word,
            'fecha_salida'=>$this->faker->word,
            'hora_entrada'=>$this->faker->word,
            'hora_salida'=>$this->faker->word,
            'total'=>$this->faker->word
        ];
    }
}
