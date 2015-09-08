<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewArrivalKiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_ki_arrival', function (Blueprint $table) {
            $table->increments('id');
            $table->string('new_arr_ki_img_id',20)->nullable();
            $table->string('new_arr_ki_img_path',300)->nullable();
            $table->string('new_arr_ki_title',200)->nullable();
            $table->string('new_arr_ki_des',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('new_ki_arrival');
    }
}
