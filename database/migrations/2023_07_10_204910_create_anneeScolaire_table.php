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
        Schema::create('anneeScolaire', function (Blueprint $table) {
            $table->id();
            $table->string('libelle',50);
            $table->unsignedSmallInteger('nb_mois');
            $table->unsignedInteger('debut_annee');
            $table->boolean('actif')->default(FALSE);
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
        Schema::dropIfExists('annee_scolaire');
    }
};
