<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeoffers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('big_img_caption');
            $table->string('offer');
            $table->text('big_image');
            $table->string('small_img_caption');
            $table->text('small_image');
            $table->string('left_img_caption');
            $table->text('left_image');
            $table->string('right_img_caption');
            $table->text('right_image');
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
        Schema::dropIfExists('homeoffers');
    }
}
