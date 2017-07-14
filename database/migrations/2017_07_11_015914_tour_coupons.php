<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TourCoupons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('tour_coupon')){
            Schema::create('tour_coupon', function (Blueprint $table) {
                $table->increments('tour_coupon_id');
                $table->string('status');
                $table->integer('customer_id')->unsigned();
                $table->foreign('customer_id')->references('customer_id')->on('customers');
                $table->integer('tour_id');
                $table->integer('service_id');
                $table->integer('children_number');
                $table->integer('adult_number');
                $table->float('price');
                $table->dateTime('created_tour_date');
                $table->integer('history_id')->unsigned();
                $table->foreign('history_id')->references('history_id')->on('history');
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
        Schema::drop('tour_coupon');
    }
}
