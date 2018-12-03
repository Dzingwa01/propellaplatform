<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyIncubatees extends Migration
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
            $table->string('business_information')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('company_name')->nullable();
            $table->string('ownership')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incubatees', function (Blueprint $table) {
            //
        });
    }
}
