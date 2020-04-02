<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receives', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->string("phonenumber");
            $table->string("address");
            $table->string("description")->nullable();
            $table->unsignedTinyInteger("mode");//1buy 2 rahn 3ejare
            $table->unsignedTinyInteger("type");//1sel 2buy
            $table->unsignedTinyInteger("buildingType");
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
        Schema::dropIfExists('receives');
    }
}
