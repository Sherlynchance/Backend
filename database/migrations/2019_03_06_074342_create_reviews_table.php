<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id'); // PRIMARY KEY
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('user_id');
            $table->string('comment');
            $table->double('rating', 3, 1);
            $table->timestamps();

            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
