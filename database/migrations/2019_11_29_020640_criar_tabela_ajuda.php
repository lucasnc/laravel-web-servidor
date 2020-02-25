<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAjuda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajuda', function (Blueprint $table) {
            $table->bigIncrements('idajuda');
            $table->string('nome', 50);
            $table->string('email', 50);
            $table->string('assunto', 25);
            $table->string('mensagem', 250);
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
        Schema::dropIfExists('ajuda');
    }
}
