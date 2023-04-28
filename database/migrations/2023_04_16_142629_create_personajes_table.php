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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('grupo_id');
            $table->text('historia');
            $table->text('personalidad');
            // Imágenes
            $table->text('imagen');
            $table->text('chibi');
            $table->text('icon');
            $table->text('stamp');
            $table->text('sticker');
            // TODO (?) Opcional: Varias imágenes de comic
            $table->text('comic');
            // [FK] Grupo
            $table->foreign('grupo_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personajes');
    }
};
