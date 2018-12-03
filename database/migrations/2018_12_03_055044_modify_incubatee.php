<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyIncubatee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incubatees', function (Blueprint $table) {
            //
            $table->string('elevator_pitch')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('startup_name')->nullable();
            $table->string('hub')->nullable();
            $table->string('smart_city_tags')->nullable();
            $table->string('b_type')->nullable();
            $table->string('company_website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incubatee', function (Blueprint $table) {
            //
        });
    }
}
