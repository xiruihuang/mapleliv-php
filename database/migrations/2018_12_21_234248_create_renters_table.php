<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('wechat')->nullable();
            $table->string('favoriteLocation')->nullable();
            $table->string('favoriteNumberOfBeds')->nullable();
            $table->string('favoritenumberOfBaths')->nullable();
            $table->string('favoritePrice')->nullable();
            $table->string('enterTime')->nullable();
            $table->string('otherRequirment')->nullable();
            $table->string('description')->nullable();
            $table->string('salesID')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('renters');
    }
}
