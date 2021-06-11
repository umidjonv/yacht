<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_activity', function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedBigInteger('ProductId');
            $table->time('Time');
            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_activity');
    }
}
