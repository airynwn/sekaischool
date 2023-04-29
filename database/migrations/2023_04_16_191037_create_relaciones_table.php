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
            $table->integer('pj1_id');
            $table->integer('pj2_id');
            $table->text('descripcion');
            $table->foreign('pj1_id')->references('id')->on('personajes');
            $table->foreign('pj2_id')->references('id')->on('personajes');
            $table->unique(['pj1_id', 'pj2_id']);
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
