<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('desc');
            $table->string('caract');
            $table->integer('isbm');
            $table->string('edicao');
            $table->string('categoria');
            $table->string('idioma');
            //$table->foreignId('autors_nome')->constrained();
            $table->foreignId('User_id')->constrained();
            //$table->foreignId('editora_nome')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
