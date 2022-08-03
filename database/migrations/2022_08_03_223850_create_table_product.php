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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //$table->string("description")->nullable();
            //$table->string("description")->default("Valor Padrão");
            $table->string("description");
            $table->string("marca");
            $table->integer("quantidade")->default(1);
            $table->float("valor")->default(0);
            $table->timestamps();

            /**
             * Cria uma coluna que salva quando o dado foi exclúido
             * Não deleta o registro
             */
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
