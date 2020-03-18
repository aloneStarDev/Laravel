<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('phonenumber',20);
            $table->integer('region');
            $table->string('address')->nullable();
            $table->integer('subscribtion-time')->nullable();
            $table->timestamp('start-subscribtion')->nullable();
            $table->boolean('mode');//pro 1 or free 0
            $table->boolean('enable');
            $table->boolean('active');//for verify phonenumber
            $table->timestamps();
            $table->foreign('phonenumber')->on('users')->references('username')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
