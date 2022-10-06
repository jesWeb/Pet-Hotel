<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\servicios_checkin>
 */
class ServiciosCheckinFactory extends Factory
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
            'total'=>$this->faker->double,
            'servicio_id'=> random (1,100),
            'checkin_id'=> random (1,100)
        ];
    }
}
