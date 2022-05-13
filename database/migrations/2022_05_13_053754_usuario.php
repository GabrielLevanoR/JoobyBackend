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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('apellidos')->nullable(false);
            $table->string('dni')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('fecha_nac')->nullable(false);
            $table->string('contras')->nullable(false);
            $table->timestamp('email_verificado')->nullable();
            $table->unsignedBigInteger('id_tipo_usuario')->nullable(false);

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usurios');
    }
};
