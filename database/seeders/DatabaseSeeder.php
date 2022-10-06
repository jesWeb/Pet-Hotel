<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\checkin;
use Illuminate\Database\Seeder;
use App\Models\mascotas;
use App\Models\servicios;
use App\Models\usuarios;
use App\Models\hotel;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            hotel::factory(1)->create();
            mascotas::factory(50)->create();
            servicios::factory(50)->create();
            usuarios::factory(50)->create();
            checkin::factory(50)->create();

    }
}
