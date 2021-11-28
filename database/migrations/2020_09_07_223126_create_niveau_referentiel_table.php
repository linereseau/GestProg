<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauReferentielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveau_referentiel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')->constrained();
            $table->foreignId('niveau_id')->constrained();
            $table->foreignId('referentiel_id')->constrained();
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
        Schema::dropIfExists('niveau_referentiel');
    }
}
