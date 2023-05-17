<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 10, 2)->default(0);
            $table->decimal('shipping', 10, 2)->default(0);
            $table->integer('items')->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->enum('type', ['Web', 'App'])->default('App');
            $table->enum('status', ['Pendiente','Entregada','Cerrada','Cancelada'])->default('Pendiente');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('customer_id')->nullable()->constrained();
            $table->string('notes', 255)->nullable();
            $table->datetime('delivery_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
