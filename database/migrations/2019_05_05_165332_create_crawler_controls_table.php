<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawlerControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawler_controls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->string('target_website_url');
            $table->longText('pagination_rules');
            $table->string('pages_to_crawl')->default(5);
            $table->integer('interval')->default('60');
            $table->longText('client_name_rules')->nullable();
            $table->longText('client_phone_rules')->nullable();
            $table->longText('description_rules')->nullable();
            $table->longText('title_rules')->nullable();
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
        Schema::dropIfExists('crawler_controls');
    }
}
