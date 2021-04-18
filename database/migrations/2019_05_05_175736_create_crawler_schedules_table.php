<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawlerSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawler_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('housing_id');
            $table->string('crawled_url');
            $table->boolean('is_loaded')->default(0);
            $table->boolean('is_sent')->default(0);
            $table->string('source');
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
        Schema::dropIfExists('crawler_schedules');
    }
}
