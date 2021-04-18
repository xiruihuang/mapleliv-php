<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userID');
            $table->string('uploadTypeID');
            $table->string('title');
            $table->string('contactPeople')->nullable();
            $table->string('phone');
            $table->string('wechat')->nullable();
            $table->string('address');
            $table->string('publicPrice');
            $table->string('originPrice')->nullable();
            $table->string('description');
            $table->string('city');
            $table->string('area')->nullable();
            $table->string('beds')->nullable();
            $table->string('baths')->nullable();
            $table->string('furnitures')->nullable();
            $table->string('washingMachines')->nullable();
            $table->string('dishWasher')->nullable();
            $table->string('elevator')->nullable();
            $table->string('oven')->nullable();
            $table->string('parking')->nullable();
            $table->string('electricity')->nullable();
            $table->string('web')->nullable();
            $table->string('refreshTime');
  

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
        Schema::dropIfExists('housings');
    }
}
