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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable(false);
            $table->string('contenido')->nullable(false);
            $table->string('imagen')->nullable(false);
            $table->unsignedBigInteger('id_usuario')->nullable(false);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }
    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacion');
    } 

};
