<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('WithdrawalDescription');
            $table->boolean('MembershipStatus');
            $table->float('CurrentPoint');
            $table->float('AccumulatedPoint');
            $table->integer('ReservationsCount');
            $table->dateTime('LastVisited');

            $table->dateTime('UpdatedAt')->nullable();
            $table->dateTime('CreatedAt')->nullable();

            $table->bigInteger('MembershipId')->unsigned();
            $table->integer('UserId')->unsigned();

            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('MembershipId')->references('Id')->on('memberships');

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
