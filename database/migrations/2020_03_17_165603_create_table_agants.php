<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAgants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('nationCode')->unique();
            $table->foreign('nationCode')->on('users')->references('password')->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('phonenumber')->unique();
            $table->foreign('phonenumber')->on('users')->references('username')->onDelete('cascade');
            $table->integer('registered_items')->default(0);
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('table_agants');
    }
}
