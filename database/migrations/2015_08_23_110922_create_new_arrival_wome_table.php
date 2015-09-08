<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewArrivalWomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_wome_arrival', function (Blueprint $table) {
            $table->increments('id');
            $table->string('new_arr_wom_img_id',20)->nullable();
            $table->string('new_arr_wom_img_path',300)->nullable();
            $table->string('new_arr_wom_title',200)->nullable();
            $table->string('new_arr_wom_des',500);
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
        Schema::drop('new_wome_arrival');
    }
}
