<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactPhoneToHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('housings', function (Blueprint $table) {
            $table->string('contactPhone')->nullable();
            $table->string('landlore')->nullable();
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
            $table->dropColumn('contactPhone');
            $table->dropColumn('landlore');
        });
    }
}
