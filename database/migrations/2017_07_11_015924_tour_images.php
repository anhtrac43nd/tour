<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TourImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('tour_images')){
            Schema::create('tour_images', function (Blueprint $table) {
                $table->increments('tour_images_id');
                $table->string('image');
                $table->integer('tour_id')->unsigned();
                $table->foreign('tour_id')->references('tour_id')->on('tours');
                $table->timestamps();
            });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('tour_images');
    }
}
