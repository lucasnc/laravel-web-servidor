<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAdocao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocao', function (Blueprint $table) {
            $table->bigIncrements('idadocao');
            $table->string('nomePessoa', 100);
            $table->string('email', 50);
            $table->string('pergunta', 50);
            $table->integer('iddog')->unsigned();
            $table->integer('ativo');
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
        Schema::dropIfExists('adocao');
    }
}
