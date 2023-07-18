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
        Schema::create('classe', function (Blueprint $table) {
            $table->id();
            $table->string('libelle',20);
            $table->unsignedSmallInteger('effectifmax');
            $table->float('frais_scolaire',5,2);
            $table->float('bareme',2,2);
            $table->foreignId('cycle_id')->constrained('cycle')
                                         ->cascadeOnUpdate()
                                         ->cascadeOnDelete();
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
        Schema::dropIfExists('classe');
    }
};
