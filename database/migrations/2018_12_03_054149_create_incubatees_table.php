<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncubateesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incubatees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('short_bio')->nullable();
            $table->string('elevator_pitch')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('startup_name')->nullable();
            $table->string('hub')->nullable();
            $table->string('smart_city_tags')->nullable();
            $table->string('b_type')->nullable();
            $table->string('company_website')->nullable();
            $table->string('business_information')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('company_name')->nullable();
            $table->string('ownership')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->string('stage')->nullable();
            $table->string('cohort')->nullable();
            $table->string('product_platform')->nullable();
            $table->string('registration_number')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incubatees');
    }
}
