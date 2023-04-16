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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('admin')->default(0);
            $table->boolean('valido')->default(0);
            // Datos de comunidad
            $table->text('avatar')->nullable();
            $table->string('biografia', 300)->nullable();
            $table->timestamp('cumple')->nullable();
            $table->string('twitter')->nullable();
            $table->string('discord')->nullable();
            $table->integer('grupo_fav_id');
            $table->integer('pj_fav_id');
            // [FK] PJ fav + Grupo fav
            $table->foreign('grupo_fav_id')->references('id')->on('grupos');
            $table->foreign('pj_fav_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
