<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Activities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->unsignedBigInteger('YachtId');
            $table->time('StartTime');
            $table->time('EndTime');
            $table->integer('Regularity');
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
        Schema::dropIfExists('activities');
    }
}
