<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('code')->unique();// randomCode uniq
            $table->unsignedInteger('buy')->nullable();
            $table->unsignedInteger('rahn')->nullable();
            $table->unsignedInteger('ejare')->nullable();
            $table->string('name',50);
            $table->string('lastname',50);
            $table->unsignedTinyInteger('buildingType'); // 1villaie 2aparteman
            $table->unsignedTinyInteger('floor')->default(1);// tabaghat
            $table->unsignedSmallInteger('area');//metraj
            $table->unsignedTinyInteger('age');//age of building
            $table->unsignedTinyInteger('unit')->default(1);// Vahed Count
            $table->unsignedTinyInteger('bedroom'); // BedRoom Count
            $table->unsignedTinyInteger('region');
            $table->string('addressPu');
            $table->string('addressPv');
            $table->string('phonenumber',20);
            $table->string('options')->nullable();//json
            $table->text('description')->nullable();
            $table->integer('user_id');
            $table->foreign('user_id')->on('agents')->references('id');
            $table->boolean('visible')->default(true);
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('files');
    }
}
