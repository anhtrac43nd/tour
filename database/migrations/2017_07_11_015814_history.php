<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class History extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('history')){
            Schema::create('history', function (Blueprint $table) {
                $table->increments('history_id');
                $table->string('action');
                $table->integer('employee_id')->unsigned();
                $table->foreign('employee_id')->references('employee_id')->on('employees');
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
        Schema::drop('history');
    }
}
