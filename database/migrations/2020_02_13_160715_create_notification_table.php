<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Notification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parkingId');
            $table->string('email');
            $table->string('vehicleNumber');
            $table->date('bookingfDate');
            $table->time('bookingfTime');
            $table->date('bookingtDate');
            $table->time('bookingtTime');
            $table->string('confirmed');
            $table->string('marked');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Notification');
    }
}
