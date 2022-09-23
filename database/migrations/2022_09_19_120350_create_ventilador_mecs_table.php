<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentiladorMecsTable extends Migration
{
   
    public function up()
    {
        Schema::create('ventilador_mecs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('modo');
            $table->string('ciclagem');
            $table->integer('fio2');
            $table->integer('peep');
            $table->integer('fr_vm');
            $table->string('ie');
            $table->string('templnsp')->nullable();
            $table->integer('pc')->nullable();
            $table->integer('ps')->nullable();
            $table->string('pav')->nullable();
            $table->integer('volControl')->nullable();
            $table->string('fluxOnda')->nullable();
            $table->string('sensibilidadeInspi')->nullable();
            $table->string('sensibilidadeExp')->nullable();
            $table->integer('assincronia')->nullable();
            $table->string('inclinacao')->nullable();
            $table->string('viaAerea');
            $table->string('fixacaoRima')->nullable();
            $table->string('pressaoCuff')->nullable();
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
        Schema::dropIfExists('ventilador_mecs');
    }
}
