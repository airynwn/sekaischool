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
        // Modifica la FK para pasar de tabla grupos a personajes
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['pj_fav_id']);
            $table->foreign('pj_fav_id')->references('id')->on('personajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
