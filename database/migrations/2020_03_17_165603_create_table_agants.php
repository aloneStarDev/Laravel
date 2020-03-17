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
            $table->string('adress')->nullable();
            $table->string('phonenumber')->unique();
            $table->integer('registerPost')->default(0);
            $table->foreign('nationCode')->on('users')->references('password')->onDelete('cascade');
            $table->foreign('phonenumber')->on('users')->references('username')->onDelete('cascade');
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
