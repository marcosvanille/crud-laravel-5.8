<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome' , 128);
            $table->string('email' , 256);
            $table->string('telefone' , 128);
            $table->string('endereco' , 128);
            $table->string('cidade' , 128);
            $table->string('tipo' , 128);
            $table->string('preco' , 128);
            $table->string('carros' , 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
