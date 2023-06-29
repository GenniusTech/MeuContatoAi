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
        Schema::create('suporte', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('tipo');
            $table->text('conteudo');
            $table->timestamp('data_cadastro')->nullable();
            $table->text('resposta')->nullable();
            $table->timestamp('data_resposta')->nullable();
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
        Schema::dropIfExists('suporte');
    }
};
