<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductAdditional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_additionals', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->float('Rating')->default(0);
            $table->integer('Popularity')->default(0);

            $table->bigInteger('ProductId')->unsigned();

            $table->foreign('ProductId')->references('Id')->on('products');

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
