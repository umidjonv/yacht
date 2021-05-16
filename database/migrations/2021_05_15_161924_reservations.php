<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('ReservationName');
            $table->dateTime('ReservationTime');
            $table->dateTime('RequestDate');
            $table->integer('Adults')->default(0);
            $table->integer('Childs')->default(0);
            $table->float('PaymentAmount')->default(0);
            $table->float('FromAccumulated')->default(0);
            $table->float('TotalAmount')->default(0);
            $table->integer('PaymentType')->default(0);
            $table->boolean('IsPayed')->default(false);
            $table->boolean('IsReserved')->default(false);


            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();

            $table->bigInteger('ProductId')->unsigned()->nullable();


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
