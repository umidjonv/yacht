<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VendorsAdditional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors_additional', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->float('SettlementFee', '8', '2')->default(10);
            $table->integer('BankId')->nullable();
            $table->string('BankAccount')->nullable();
            $table->string('BankAccountName')->nullable();
            $table->integer('CancelledBefore7')->default(70);
            $table->integer('CancelledBefore45')->default(50);
            $table->integer('CancelledBefore13')->default(40);
            $table->integer('CancelledOnDay')->default(30);
            $table->boolean('IsCancellable')->default(false);
            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();


            $table->bigInteger('VendorId')->unsigned();

            $table->foreign('VendorId')->references('Id')->on('vendors');

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
