<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGasToHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('housings', function (Blueprint $table) {
            $table->string('gas')->nullable();
            $table->string('condition')->nullable();
            $table->string('progress')->nullable();
            $table->string('websiteLink')->nullable();
            $table->string('size')->nullable();
            $table->string('enterTime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('housings', function (Blueprint $table) {
            $table->dropColumn('gas');
            $table->dropColumn('condition');
            $table->dropColumn('progress');
            $table->dropColumn('websiteLink');
            $table->dropColumn('size');
            $table->dropColumn('enterTime');
        });
    }
}
