<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('customers')){
            Schema::create('customers', function (Blueprint $table) {
                $table->increments('customer_id');
                $table->string('customer_name');
                $table->date('dob');
                $table->tinyInteger('gender');
                $table->string('phone_number',13);
                $table->string('email',50);
                $table->string('username',50);
                $table->string('password');
                $table->string('address');
                $table->string('passport',15);
                $table->string('code_reset_password');
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
        Schema::drop('customers');
    }
}
