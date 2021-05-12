<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaExcel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('dataVehiculo', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('matricula')->unique();
            $table->date('primerTramite')->nullable();
            $table->date('segundoTramite')->nullable();
            $table->string('tramite');
            $table->string('plazo');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*Matrícula	
    1er trámite envio
    2do trámite envio
    trámite
    Plazos
    */


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('dataVehiculo');
    }
}
