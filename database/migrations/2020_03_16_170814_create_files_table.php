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
            $table->integerIncrements('fileId');
            $table->string('name');
            $table->string('lastname');
            $table->string('phonenumber',20)->unique();
            $table->string('addressPu');//public Adress
            $table->string('addressPv');//private Adress
            $table->string('imgPath')->nullable();
            $table->integer('region');
            $table->integer('userId');//how employee stored this file
            $table->boolean('visible');
            $table->boolean('enable');
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
