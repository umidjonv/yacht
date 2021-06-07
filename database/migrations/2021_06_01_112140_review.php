<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Review extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('Id');

            $table->bigInteger('ProductId')->unsigned();
            $table->integer('UserId')->unsigned();

            $table->text('Message');
            $table->float('Rating', 2,2)->nullable();

            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();

            $table->foreign('ProductId')->references('Id')->on('products');
            $table->foreign('UserId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
