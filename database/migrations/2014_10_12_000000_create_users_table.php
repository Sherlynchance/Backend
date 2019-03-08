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
            $table->bigIncrements('user_id'); //PRIMARY KEY
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_address');
            $table->integer('user_postal');
            $table->string('user_city');
            $table->string('user_phone_no');
            $table->string('user_email')->unique();
            $table->string('user_username');
            $table->string('user_password');
            $table->string('user_roles');
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
