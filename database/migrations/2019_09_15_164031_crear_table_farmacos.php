<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableFarmacos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('farmacos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('laboratorio_id')->unsigned();
            $table->foreign('laboratorio_id')
            ->references('id')
            ->on('laboratorios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
