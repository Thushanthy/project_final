<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicledetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicledetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehiclename');
            $table->string('type');
            $table->string('company')->nullable();
            $table->string('registeredprovince');
            $table->integer('coderange');
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
        Schema::dropIfExists('vehicledetails');
    }
}
