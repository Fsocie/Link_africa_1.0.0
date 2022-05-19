<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationEntrePaysEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_entre_pays_entreprises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entreprise_id')->unsigned();
            $table->bigInteger('pays_id')->unsigned();
            $table->string('libelle')->nullable();
            $table->timestamps();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_entre_pays_entreprises');
    }
}
