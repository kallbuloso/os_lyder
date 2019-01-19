<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Informações iniciais
            $table->increments('id');
            $table->string('cnpj_cpf')->unique();
            $table->string('name');
            $table->string('nik_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('rg_ie')->nullable();
            $table->string('im')->nullable();
            $table->string('phone')->nullable();
            $table->string('celphone')->nullable();
            // Endereço
            $table->string('address')->nullable();                          // endereço
            $table->string('neighborhood')->nullable();                     // bairro
            $table->string('city')->nullable();                             // cidade / município
            $table->string('state')->nullable();                            // estado
            $table->string('number')->nullable();                           // número
            $table->string('zipcode')->nullable();                          // CEP
            $table->string('complement')->nullable();                       // complemento

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('site')->nullable();
            $table->string('password');
            $table->string('database')->nullable();
            $table->boolean('status')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
