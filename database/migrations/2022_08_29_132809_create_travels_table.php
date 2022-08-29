<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            //definisco le colonne della tabella
            $table->id();
            $table->string('partenza', 50);
            $table->string('destinazione', 50);
            $table->date('orario_partenza');
            $table->date('orario_arrivo');
            $table->unsignedDecimal('prezzo', 7,2);
            $table->smallInteger('numero_camere');
            $table->smallInteger('numero_persone');
            $table->smallInteger('wifi_gratis')->default(0);
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
        Schema::dropIfExists('travels');
    }
}
