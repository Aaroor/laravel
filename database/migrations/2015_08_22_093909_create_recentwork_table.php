<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecentworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_work', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recent_img_id',20)->nullable();
            $table->string('recent_img_path',300)->nullable();
            $table->string('des_title',200)->nullable();
            $table->string('description',500);
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
        Schema::drop('recent_work');
    }
}
