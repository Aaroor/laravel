<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsDressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids_dress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kids_dress_img_id',20)->nullable();
            $table->string('kids_dress_img_path',300)->nullable();
            $table->string('kids_dress_title',200)->nullable();
            $table->string('kids_dress_des',500);
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
        Schema::drop('kids_dress');
    }
}
