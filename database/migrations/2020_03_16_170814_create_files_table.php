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
            $table->integer('code')->unique();// randomCode uniq
            $table->unsignedFloat('buy')->nullable();
            $table->unsignedFloat('rahn')->nullable();
            $table->unsignedFloat('ejare')->nullable();
            $table->string('name',50);
            $table->string('lastname',50);
            $table->unsignedTinyInteger('buildingType'); // 1villaie 2aparteman 3 edary 4 tejary 4 zamin_kolangi
            $table->unsignedSmallInteger('area');//metraj
            $table->unsignedTinyInteger('region');
            $table->string('addressPu');
            $table->string('addressPv');
            $table->string('phonenumber',20);
            $table->text('description')->nullable();
            //===============================================
            $table->unsignedTinyInteger("floorCovering")->nullable();
            $table->unsignedTinyInteger("cabinet")->nullable();
            $table->unsignedTinyInteger("floorCount")->nullable();
            $table->unsignedTinyInteger("direction")->nullable();
            $table->unsignedTinyInteger("heating")->nullable();
            $table->unsignedTinyInteger("cooling")->nullable();
            $table->unsignedTinyInteger("view")->nullable();
            $table->unsignedTinyInteger("document")->nullable();
            $table->unsignedTinyInteger('floor')->default(1);// tabaghat
            $table->unsignedSmallInteger('age')->nullable();//age of building
            $table->unsignedTinyInteger('unit')->default(1);// Vahed Count
            $table->unsignedTinyInteger('bedroom')->nullable(); // BedRoom Count
            //================================================
            $table->integer('user_id');//file register by a member if user_id be a negative number
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
