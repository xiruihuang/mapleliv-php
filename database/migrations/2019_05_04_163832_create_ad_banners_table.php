<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_url')->nullable();
            $table->string('ad_name');
            $table->string('ad_description');
            $table->string('ad_image_url')->nullable();
            $table->longText('ad_position')->nullable()->comment('notate where on the page this goes, usually match some tag, eg:R4,right,2');
            $table->string('ad_dimension')->nullable();
            $table->string('ad_link_path')->nullable();
            $table->string('is_paid')->nullble();
            $table->string('sponsor')->nullable();
            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('ad_banners');
    }
}
