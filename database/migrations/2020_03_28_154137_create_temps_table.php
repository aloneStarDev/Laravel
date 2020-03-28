<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temps', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('office')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_home')->nullable();
            $table->string('email')->nullable();
            $table->unsignedTinyInteger('panel')->nullable();// 1 2 3 4
            $table->boolean('active')->default(false);
            $table->boolean('enable')->default(false);
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
        Schema::dropIfExists('temps');
    }
}
