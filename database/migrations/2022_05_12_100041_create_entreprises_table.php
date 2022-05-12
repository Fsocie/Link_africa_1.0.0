<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sous_categorie_id')->unsigned();
            $table->string('nom')->nullable();
            $table->string('email')->unique();
            $table->string('adresse')->nullable();
            $table->string('statu')->nullable();
            $table->string('telephone')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('sous_categorie_id')->references('id')->on('sous_categorie_entreprises')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
