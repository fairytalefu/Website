<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePVModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_v_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('module_id')->unsigned()->index();
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
        Schema::dropIfExists('p_v_modules');
    }
}
