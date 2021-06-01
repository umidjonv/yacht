<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->bigIncrements('Id');

            $table->bigInteger('ProductId')->unsigned();
            $table->integer('UserId')->unsigned();
            $table->integer('Type')->default(0);
            $table->text('Title')->default(0);
            $table->text('Message');
            $table->bigInteger('ParentId')->nullable();
            $table->boolean('IsPublic')->deafault(false);

            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();

            $table->foreign('ProductId')->references('Id')->on('products');
            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('ParentId')->references('Id')->on('feedbacks');

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
