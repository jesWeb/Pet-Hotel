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
        Schema::create('servicios_checkins', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('total',$precision = 8, $scale = 2);
            $table->timestamps();
            //llave foranea
            $table->unsignedBigInteger('check_id') ;
             $table->foreign('check_id')->references('id')->on('checkins');
             $table->unsignedBigInteger('serv_id') ;
             $table->foreign('serv_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_checkins');
    }
};
