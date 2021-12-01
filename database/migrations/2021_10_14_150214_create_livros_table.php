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
            $table->string('descr')->nullable();
            $table->enum('status', ['VE', 'TR', 'EM']); //venda, troca, emprestimo
            $table->string('caract');
            $table->integer('isbm');
            $table->string('edicao')->nullable();
            $table->string('categoria');
            $table->string('idioma');
            $table->string('autor_nome')->nullable();
            $table->foreignId('User_id')->constrained();
            $table->string('editora_nome')->nullable();
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
