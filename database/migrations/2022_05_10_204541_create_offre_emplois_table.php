<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entreprise_id')->unsigned();
            $table->bigInteger('emploi_id')->unsigned();
            $table->string('titre')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
            $table->foreign('emploi_id')->references('id')->on('emplois')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre_emplois');
    }
}
