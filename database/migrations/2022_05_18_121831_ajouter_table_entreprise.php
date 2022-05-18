<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterTableEntreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entreprises', function (Blueprint $table) {
            $table->string('itineraire')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('description_entreprise')->nullable();
            $table->string('telephone2')->nullable();
            $table->string('telephone3')->nullable();
            $table->string('telephone4')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprises', function (Blueprint $table) {
            $table->dropColumn('itineraire');
            $table->dropColumn('siteweb');
            $table->dropColumn('description_entreprise');
            $table->dropColumn('telephone2');
            $table->dropColumn('telephone3');
            $table->dropColumn('telephone4');
            $table->dropColumn('photo');
        });
    }
}
