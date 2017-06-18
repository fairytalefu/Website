<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigend()->index()->default(1);
            $table->string('station_id')->default(1);
            $table->smallInteger('is_active')->default(0);
            $table->string('name')->unique();
            $table->string('confirmation_token');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatars')->default('default.jpg');
            $table->string('api_token');
            $table->enum('roles',['admin','member']);
            $table->dateTime('register_time');
            $table->string('phoneNumber');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
