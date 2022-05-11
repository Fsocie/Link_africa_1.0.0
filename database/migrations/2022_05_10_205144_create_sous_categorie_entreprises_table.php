<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousCategorieEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_categorie_entreprises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categorie_entreprises_id')->unsigned();
            $table->string('libelle')->nullable();
            $table->timestamps();
            $table->foreign('categorie_entreprises_id')->references('id')->on('categorie_entreprises')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous_categorie_entreprises');
    }
}
