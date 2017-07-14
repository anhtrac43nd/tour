<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('tours')){
            Schema::create('tours', function (Blueprint $table) {
                $table->increments('tour_id');
                $table->string('tour_name');
                $table->float('base_prices');
                $table->float('sale_prices');
                $table->integer('discount_code_id')->unsigned();
                $table->foreign('discount_code_id')->references('discount_code_id')->on('discount_code');
                $table->text('content');
                $table->date('begin_time');
                $table->string('duration');
                $table->integer('max_custom_number');
                $table->integer('start_place');
                $table->string('journey');
                $table->string('vehicle');
                $table->tinyInteger('locked');
                $table->string('schedule');
                $table->string('note');
                $table->string('overview');
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
        Schema::drop('tours');
    }
}
