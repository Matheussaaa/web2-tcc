<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosAtingidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros_atingidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vent_id');
            $table->foreign('vent_id')->references('id')->on('ventilador_mecs');
            $table->integer('volReal');
            $table->string('volMin');
            $table->integer('pPico');
            $table->integer('pMedia');
            $table->string('pPlato');
            $table->string('complacencia');
            $table->string('resistencia');
            $table->string('autoPeep');
            $table->softDeletes();
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
        Schema::dropIfExists('parametros_atingidos');
    }
}
