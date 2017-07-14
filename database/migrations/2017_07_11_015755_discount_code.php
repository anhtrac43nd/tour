<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscountCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('discount_code')){
            Schema::create('discount_code', function (Blueprint $table) {
                $table->increments('discount_code_id');
                $table->string('discount_code_name');
                $table->date('start_date');
                $table->date('end_date');
                $table->integer('employee_id');
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
        Schema::drop('discount_code');
    }
}
