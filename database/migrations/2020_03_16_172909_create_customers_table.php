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
            $table->string('phonenumber',20)->unique();
            $table->string('email')->nullable();
            $table->integer('region');
            $table->string('office');
            $table->string('address')->nullable();
            $table->string('call')->nullable();
            $table->json('ip')->nullable();
            $table->unsignedTinyInteger('ipCount')->default(1);
            $table->unsignedTinyInteger('panel');//1->1 2->3 3->6 4->1year
            $table->string('explain')->nullable();
            $table->string('social')->nullable();
            $table->timestamp('expire_subscription')->nullable();
            $table->boolean('enable')->default(false);//for verify phonenumber
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('customers');
    }
}
