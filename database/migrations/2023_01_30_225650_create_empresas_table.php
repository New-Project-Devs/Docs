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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social');
            $table->string('nome_fantasia')->nullable();
            $table->string('cnpj')->unique();
            $table->string('insc_municipal')->unique()->nullable();
            $table->string('insc_estadual')->unique()->nullable();
            $table->string('segmento');
            $table->integer('tipo_endereco');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('complemento')->nullable();
            $table->string('cep');
            $table->integer('cidade');
            $table->integer('estado');
            $table->json('telefones')->nullable();
            $table->json('emails')->nullable();
            $table->text('obs')->nullable();
            $table->string('logo_empresa')->nullable();
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
        Schema::dropIfExists('empresas');
    }
};
