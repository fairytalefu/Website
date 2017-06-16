<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePVArraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('p_v_arrays', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('array_id')->index()->default(0);
            $table->string('station_id')->default(0);
            $table->float('Current',6);
            $table->float('Voltage',6);
            $table->float('Power',6);
            $table->float('Temp',6);
            $table->float('Irr',6);
            $table->float('Vmp',6);
            $table->float('Imp',6);
            $table->dateTime('upload_time');
            $table->enum('status_describe',['Noraml','Open1','Open2','Short1','Short2','Shadow1','Shadow2']);
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
        Schema::dropIfExists('p_v_arrays');
    }
}
