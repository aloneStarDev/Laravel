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
            $table->string('call')->nullable();
            $table->json('users')->nullable();
            $table->timestamp('expire_subscription')->nullable();
            $table->boolean('enable')->default(false);//for verify phonenumber
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->foreign('phonenumber')->on('users')->references('username');
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
