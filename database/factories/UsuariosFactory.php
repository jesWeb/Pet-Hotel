<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuarios>
 */
class UsuariosFactory extends Factory
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
            'puesto_id'=>$this->faker->integer,
            'bañador'=>$this->faker->char,
            'paseador'=>$this->faker->char,
            'veterinario'=>$this->faker->char,
            'entrenador'=>$this->faker->char,
            'sexo'=>$this->faker->char,
            'email'=>$this->faker->char,
            'edad'=>$this->faker->integer,
            'nombre_completo'=>$this->faker->char,
            'password'=>$this->faker->char,
            'calle'=>$this->faker->text,
            'numero_ext'=>$this->faker->integer,
            'numero_int'=>$this->faker->integer,
            'localidad'=>$this->faker->text,
            'municipio_id'=>$this->faker->integer,
            
        
            'mascota_id'=> random (1,100),
            'servicio_id'=> random (1,100),
            'hostal_id'=> random (1,100),
            'checkin_id'=> random (1,100)
        ];
    }
}
