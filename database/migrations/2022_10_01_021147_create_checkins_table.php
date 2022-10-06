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
        Schema::create('checkins', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->dateTime('hora_entrada',$precision = 0);
            $table->dateTime('hora_salida',$precision = 0);
            $table->decimal('total',$precision = 8, $scale = 2);
            $table->timestamps();
            //llave foranea
            $table->unsignedBigInteger('mascota_id'); 
            $table->foreign('mascota_id')->references('id')->on('mascotas');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkins');
    }
};
