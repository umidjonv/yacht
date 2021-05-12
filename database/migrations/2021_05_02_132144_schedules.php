<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
        $table->bigIncrements('Id');
        $table->unsignedBigInteger('YachtId');
        $table->integer('Type');
        $table->dateTime('StartDate');
        $table->dateTime('EndDate');
        $table->dateTime('UpdatedAt')->nullable();
        $table->dateTime('CreatedAt')->nullable();

        $table->foreign('YachtId')->references('id')->on('yachts');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
