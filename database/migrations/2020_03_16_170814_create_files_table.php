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
            $table->double('buy',15,8)->nullable();
            $table->double('rahn',15,8)->nullable();
            $table->double('ejare',15,8)->nullable();
            $table->string('name',50);
            $table->string('lastname',50);
            $table->unsignedTinyInteger('buildingType'); // 1villaie 2aparteman 3 edary 4 tejary 4 zamin_kolangi
            $table->unsignedSmallInteger('area');//metraj
            $table->unsignedTinyInteger('region');
            $table->string('addressPu');
            $table->string('addressPv');
            $table->string('phonenumber',20);
            $table->text('description')->nullable();
            $table->unsignedTinyInteger("floorCount")->nullable()->default(1);
            $table->unsignedTinyInteger('floor')->default(1)->nullable();// tabaghat
            $table->unsignedSmallInteger('age')->nullable();//age of building
            $table->unsignedTinyInteger('unit')->default(1)->nullable();// Vahed Count
            $table->unsignedTinyInteger('bedroom')->nullable(); // BedRoom Count
            //===============================================
            $table->unsignedTinyInteger("floorCovering")->default(0);
            $table->unsignedTinyInteger("cabinet")->default(0);
            $table->unsignedTinyInteger("direction")->default(0);
            $table->unsignedTinyInteger("heating")->default(0);
            $table->unsignedTinyInteger("cooling")->default(0);
            $table->unsignedTinyInteger("view")->default(0);
            $table->unsignedTinyInteger("document")->default(0);
            //================================================
            $table->boolean('parking')->default(false);
            $table->boolean('asansor')->default(false);
            $table->boolean('iphone')->default(false);
            $table->boolean('trace')->default(false);
            $table->boolean('anbary')->default(false);
            $table->boolean('edoor')->default(false);
            $table->boolean('wc')->default(false);
            $table->boolean('hamam')->default(false);
            $table->boolean('komod')->default(false);
            $table->boolean('gas')->default(false);
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
