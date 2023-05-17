<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->bigInteger('nif')->nullable()->unsigned()->length(9);
            $table->string('commercial_name')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('number')->nullable()->unsigned()->length(4);
            $table->bigInteger('phone')->nullable()->unsigned()->length(15);
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
