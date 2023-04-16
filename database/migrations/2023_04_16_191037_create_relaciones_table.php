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
        Schema::create('relaciones', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->integer('pj_a');
            $table->integer('pj_b');
            // [FK] PJ 1 + PJ 2
            $table->foreign('pj_a')->references('id')->on('personajes');
            $table->foreign('pj_b')->references('id')->on('personajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relaciones');
    }
};
