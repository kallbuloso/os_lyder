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
            // $table->integer('type_persona');                // 0 = Cliente, 1 = Fornecedor, 2 = Colaborador
            $table->integer('person');                     // 0 = Física, 1 = Jurídica
            // $table->boolean('carrying')->default(false);    // transportadora 0 = não, 1 = sim
            $table->string('name');
            $table->string('nik_name')->nullable();
            $table->string('contact')->nullable();
            // Documentos
            $table->string('cnpj_cpf')->unique();
            $table->string('rg_ie')->nullable();
            $table->string('im')->nullable();
            // Telefone
            $table->string('phone')->nullable();
            $table->string('celphone')->nullable();            
            // Gênero
            $table->integer('gender')->nullable();          // 0 = Masculino, 1 = Feminino, 2 = Transgenero 
            // endereço
            // Web
            $table->string('email')->unique();
            $table->string('site')->nullable();
            // Observação
            $table->text('notice')->nullable();             // observação
            // Lógica
            $table->timestamp('last_purchase')->nullable(); // última compra
            $table->boolean('status')->default(true);       // true = Ativo, false = bloqueado/inativo
            $table->integer('attended_by')->default(0);     // user_id
            $table->integer('last_updated_by');             // user_id última alteração
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
