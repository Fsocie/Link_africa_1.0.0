<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categorieArticle_id')->unsigned();
            $table->string('titre')->nullable();
            $table->string('image')->nullable();
            $table->string('libelle')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreign('categorieArticle_id')->references('id')->on('cartegorie_articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
