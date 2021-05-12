<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('CompanyName');
            $table->string('RepresentativeName')->nullable();
            $table->string('Contact');
            $table->string('Email');
            $table->string('BusinessNumber')->nullable();
            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();
            $table->boolean('IsActive')->default(false);
            $table->integer('UserId')->unsigned();

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
        Schema::dropIfExists('vendors');
    }
}
