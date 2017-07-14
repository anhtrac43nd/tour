<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('vehicles')){
            Schema::create('vehicles', function (Blueprint $table) {
                $table->increments('vehicle_id');
                $table->string('vehicle_name',30);
                $table->string('vehicle_image');
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
        Schema::drop('vehicles');
    }
}
