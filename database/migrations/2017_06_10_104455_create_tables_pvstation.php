<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesPvstation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvstation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('station_id');
            $table->unsignedTinyInteger('device_uuid');
            $table->unsignedTinyInteger('module_id');
            $table->unsignedTinyInteger('array_id');
            $table->float('Lat',6);
            $table->float('Lng',6);
            $table->float('env_Temp',6);
            $table->float('env_Irr',6);
            $table->float('wind_force',6);
            $table->enum('wind_direction',['North','South','East','West','east_south','east_north','west_north','west_south']);
            $table->float('generating_capacity');
            $table->timestamps();
        });
        Schema::create('pvarray', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('array_id');
            $table->float('Current',6);
            $table->float('Voltage',6);
            $table->float('Power',6);
            $table->float('Temp',6);
            $table->float('Irr',6);
            $table->float('Vmp',6);
            $table->float('Tmp',6);
            $table->enum('status_describe',['Noraml','Open1','Open2','Short1','Short2','Shadow1','Shadow2']);
            $table->timestamps();
        });
        Schema::create('pvmodule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('array_id');
            $table->float('Current',6);
            $table->float('Voltage',6);
            $table->float('Power',6);
            $table->float('Temp',6);
            $table->float('Irr',6);
            $table->string('is_breakdown',3)->default('F');
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
        Schema::dropIfExists('pvstation');
    }
}
