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
            $table->unsignedInteger('rahn');
            $table->unsignedInteger('ejare')->default(0);// if ejare is 0 toman so rahn value is buy value
            $table->string('name');
            $table->string('lastname');
            $table->string('buildingType'); // villaie aparteman
            $table->tinyInteger('floor')->default(1);// tabaghat
            $table->tinyInteger('area');//metraj
            $table->tinyInteger('age');//age of building
            $table->tinyInteger('unit')->default(1);// Vahed Count
            $table->tinyInteger('bedroom'); // BedRoom Count
            $table->multiLineString('addressPu');
            $table->multiLineString('addressPv');
            $table->string('phonenumber',20);
            $table->text('options')->nullable();//json
            $table->text('description')->nullable();
            $table->integer('userId');
            $table->boolean('visible');
            $table->boolean('deleted');
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
