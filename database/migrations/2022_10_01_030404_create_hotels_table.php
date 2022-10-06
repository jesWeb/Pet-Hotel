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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->char('Dirrecion');
            $table->char('telefono');
            $table->timestamps();
            //llaves foraneas
             $table->unsignedBigInteger('serv_id') ;
             $table->foreign('serv_id')->references('id')->on('servicios');
             $table->unsignedBigInteger('usuarios_id') ;
             $table->foreign('usuarios_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
