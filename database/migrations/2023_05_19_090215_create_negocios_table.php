<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->enum('tipo_negocio', ['Panadería', 'Bar/Café', 'Restaurante', 'Fastfood', 'Retail', 'Barbería'])->nullable();
            $table->decimal('impuestos', 4, 2)->nullable();
            $table->string('tipo_cuenta')->default('no')->nullable();
            $table->text('notas')->nullable();
            $table->string('logoPrincipal')->nullable();
            $table->string('direccion')->nullable();
            $table->string('altura', 6)->nullable();
            $table->string('ciudad')->nullable();
            $table->string('provincia')->nullable();
            $table->boolean('incluye_imp')->default(true);
            $table->decimal('paso', ['paso1','paso2','paso3','paso4','paso5','paso6'])->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negocios');
    }
}
