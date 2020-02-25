<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaDogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog', function (Blueprint $table) {
            $table->bigIncrements('iddog');
            $table->string('nome', 25);
            $table->string('descricao', 250);
            $table->string('tamanho', 25);
            $table->string('image', 250)->nullable();
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
        Schema::dropIfExists('dog');
    }
}
