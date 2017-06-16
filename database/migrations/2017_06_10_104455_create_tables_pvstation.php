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
            $table->integer('station_id')->unsigned()->index()->default(1);
            $table->float('Lat',6);
            $table->float('Lng',6);
            $table->float('env_Temp',6);
            $table->float('env_Irr',6);
            $table->float('wind_force',6);
            $table->enum('wind_direction',['North','South','East','West','east_south','east_north','west_north','west_south'])->default('South');
            $table->float('generating_capacity')->nullable();
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
