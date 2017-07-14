<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Places extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('places')){
            Schema::create('places', function (Blueprint $table) {
                $table->increments('place_id');
                $table->string('place_name',30);
                $table->string('description');
                $table->string('image');
                $table->integer('parent_id');
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
        Schema::drop('places');
    }
}
