<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('hotel_id'); // PRIMARY KEY
            $table->string('hotel_name');
            $table->string('hotel_address');
            $table->string('hotel_phoneno');
            $table->integer('hotel_postal');
            $table->double('hotel_ratings', 3, 1);
            $table->string('hotel_image')->nullable();
            $table->timestamps();

            // Keys
            // $table->primary('hotel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
