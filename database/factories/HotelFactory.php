<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hotel>
 */
class HotelFactory extends Factory
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
            'direccion'=>$this->faker->char,
            'telefono'=>$this->faker->char,
            'usuario_id'=> random (1,100),
            'servicio_id'=> random (1,100)
        ];
    }
}
