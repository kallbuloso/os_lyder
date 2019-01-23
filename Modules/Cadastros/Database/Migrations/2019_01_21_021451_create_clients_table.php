<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            // Informações iniciais
            $table->increments('id');
            $table->integer('type');        // 0 = Física, 1 = Jurídica
            $table->string('name');
            $table->string('nik_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('cnpj_cpf')->unique();
            $table->string('rg_ie')->nullable();
            $table->string('im')->nullable();
            $table->string('phone')->nullable();
            $table->string('celphone')->nullable();                 
            
            $table->integer('gender');          // 0 = Masculino, 1 = Feminino, 2 = Transgenero       
            $table->string('email')->unique();
            $table->string('site')->nullable();
            $table->text('notice')->nullable();
            // $table->timestamp('last_purchase')->nullable();

            $table->boolean('status')->default(true);
            $table->integer('attended_by');
            $table->integer('last_updated_by');
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
        Schema::dropIfExists('clients');
    }
}
