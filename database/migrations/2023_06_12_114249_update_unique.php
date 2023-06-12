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
        // * GRUPOS
        Schema::table('grupos', function (Blueprint $table) {
            $table->unique('nombre');
            $table->unique('logo');
            $table->unique('imagen');
            $table->unique('historia');
        });

        // * USERS
        Schema::table('users', function (Blueprint $table) {
            $table->unique('name');
        });

        // * CARTAS
        Schema::table('cartas', function (Blueprint $table) {
            $table->text('unidolized_icon')->nullable(false)->change();
            $table->text('idolized_icon')->nullable(false)->change();
        });

        // * PREGUNTAS
        Schema::table('preguntas', function (Blueprint $table) {
            $table->unique('pregunta');
        });

        // * TRIVIA
        Schema::table('trivia', function (Blueprint $table) {
            $table->unique('dato');
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
