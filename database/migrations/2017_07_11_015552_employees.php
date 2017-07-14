<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
             $table->increments('employee_id');
             $table->string('email')->unique();
             $table->string('password');
             $table->string('level');
             $table->date('dob');
             $table->tinyInteger('gender');
             $table->string('phone_number');
             $table->string('address');
             $table->string('employee_name');
             $table->string('avatar');
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
        Schema::drop('employees');
    }
}
