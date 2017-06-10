<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('station_id')->unsigned();
            $table->integer('device_uuid')->unsigned()->index()->default(0);
//            $table->integer('sensor_id')->unsigned()->index();
            $table->ipAddress('device_ip');
            $table->float('cpu_temp');
            $table->float('disk_space_usage');
            $table->float('memory_usage');
            $table->float('cpu_usage');
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
        Schema::dropIfExists('devices');
    }
}
