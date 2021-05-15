<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Name');
            $table->integer('Division')->default(\App\Common\Enums\YachtDivision::tour);
            $table->boolean('IsDisplayed')->default(true);
            $table->integer('CapacityAdult');
            $table->integer('CapacityChild');
            $table->integer('Introduction')->nullable();
            $table->float('PriceAdult');
            $table->float('PriceChild');
            $table->string('Location')->nullable();

            $table->bigInteger('YachtId')->unsigned();

            $table->foreign('YachtId')->references('Id')->on('yachts');

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
