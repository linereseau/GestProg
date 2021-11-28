<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('programme_id')->constrained();
            $table->foreignId('utilisateur_id')->constrained();
            $table->foreignId('etablissement_id')->constrained();
            $table->foreignId('filiere_id')->constrained();
            $table->foreignId('partenaire_id')->constrained();
            $table->string('appui');
            $table->string('RessourceNecessaire');
            $table->string('motif');
            $table->text('motivation');
            $table->string('etat')->default('en attente');
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
        Schema::dropIfExists('demandes');
    }
}
