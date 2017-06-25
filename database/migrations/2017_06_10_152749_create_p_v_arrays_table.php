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
            $table->string('station_id')->default(1);
            $table->float('Current',6)->default(0);
            $table->float('Voltage',6)->default(0);;
            $table->float('Power',6)->default(0);;
            $table->float('Temp',6)->default(0);;
            $table->float('Irr',6)->default(0);;
            $table->dateTime('upload_time');
            $table->string('status_describe');
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
