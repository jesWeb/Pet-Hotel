<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('puesto_id');
            $table->string('bañador');
            $table->string('paseador');
            $table->string('veterinario');
            $table->string('entrenador');
            $table->integer('sexo');
            $table->string('nombre_completo');
            $table->char('email');
            $table->char('password');
            $table->string('calle');
            $table->string('numero_ext');
            $table->string('numero_int');
            $table->string('localidad');
            $table->timestamps();
             //llave foraneas
             $table->unsignedBigInteger('hostales_id') ;
             $table->foreign('hostales_id')->references('id')->on('hotels');
             $table->unsignedBigInteger('serv_id') ;
             $table->foreign('serv_id')->references('id')->on('servicios');
             $table->unsignedBigInteger('pet_id') ;
             $table->foreign('pet_id')->references('id')->on('mascotas');
             $table->unsignedBigInteger('check_id') ;
             $table->foreign('check_id')->references('id')->on('checkins');
             $table->unsignedBigInteger('types_user_id') ;
             $table->foreign('types_user_id')->references('id')->on('type_usuarios');
            
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
