<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            // Informações iniciais
            $table->increments('id');
            $table->string('name');
            $table->string('nik_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('cnpj_cpf')->unique();
            $table->string('rg_ie')->nullable();
            $table->string('im')->nullable();
            $table->string('phone')->nullable();
            $table->string('celphone')->nullable();                 

            $table->string('email')->unique();
            $table->string('site')->nullable();
            $table->string('password');
            $table->text('notice')->nullable();

            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('providers');
    }
}
