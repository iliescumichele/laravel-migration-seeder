<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', '100');
            $table->string('Stazione_partenza', '70');
            $table->string('Stazione_arrivo', '70');
            $table->timeTz('Orario_partenza', '2');
            $table->timeTz('Orario_arrivo', '2');
            $table->string('Codice_Treno', '10');
            $table->integer('Numero_Carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('trains');
    }
}
