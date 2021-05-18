<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYachtImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yacht_images', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name');
            $table->integer('YachtId');
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
        Schema::dropIfExists('yacht_images');
    }
}
