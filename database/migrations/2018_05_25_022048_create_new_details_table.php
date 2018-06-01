<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->integer('heart')->nullable();
            $table->date('date')->nullable();
            $table->string('img_1')->nullable();
            $table->string('strong_text_1')->nullable();
            $table->text('text_1_1')->nullable();
            $table->text('text_2_1')->nullable();
            $table->text('text_3_1')->nullable();
            $table->text('text_4_1')->nullable();
            $table->text('text_5_1')->nullable();
            $table->text('text_6_1')->nullable();
            $table->text('text_7_1')->nullable();
            $table->text('text_8_1')->nullable();
            $table->text('text_9_1')->nullable();
            $table->text('text_10_1')->nullable();
            $table->text('text_11_1')->nullable();
            $table->text('text_12_1')->nullable();
            $table->text('text_13_1')->nullable();
            $table->text('text_14_1')->nullable();
            $table->text('text_15_1')->nullable();
            $table->text('text_16_1')->nullable();
            $table->text('text_17_1')->nullable();
            $table->text('text_18_1')->nullable();
            $table->text('text_19_1')->nullable();
            $table->text('text_20_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('strong_text_2')->nullable();
            $table->text('text_1_2')->nullable();
            $table->text('text_2_2')->nullable();
            $table->text('text_3_2')->nullable();
            $table->text('text_4_2')->nullable();
            $table->text('text_5_2')->nullable();
            $table->text('text_6_2')->nullable();
            $table->text('text_7_2')->nullable();
            $table->text('text_8_2')->nullable();
            $table->text('text_9_2')->nullable();
            $table->text('text_10_2')->nullable();
            $table->text('text_11_2')->nullable();
            $table->text('text_12_2')->nullable();
            $table->text('text_13_2')->nullable();
            $table->text('text_14_2')->nullable();
            $table->text('text_15_2')->nullable();
            $table->text('text_16_2')->nullable();
            $table->text('text_17_2')->nullable();
            $table->text('text_18_2')->nullable();
            $table->text('text_19_2')->nullable();
            $table->text('text_20_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('strong_text_3')->nullable();
            $table->text('text_1_3')->nullable();
            $table->text('text_2_3')->nullable();
            $table->text('text_3_3')->nullable();
            $table->text('text_4_3')->nullable();
            $table->text('text_5_3')->nullable();
            $table->text('text_6_3')->nullable();
            $table->text('text_7_3')->nullable();
            $table->text('text_8_3')->nullable();
            $table->text('text_9_3')->nullable();
            $table->text('text_10_3')->nullable();
            $table->text('text_11_3')->nullable();
            $table->text('text_12_3')->nullable();
            $table->text('text_13_3')->nullable();
            $table->text('text_14_3')->nullable();
            $table->text('text_15_3')->nullable();
            $table->text('text_16_3')->nullable();
            $table->text('text_17_3')->nullable();
            $table->text('text_18_3')->nullable();
            $table->text('text_19_3')->nullable();
            $table->text('text_20_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('strong_text_4')->nullable();
            $table->text('text_1_4')->nullable();
            $table->text('text_2_4')->nullable();
            $table->text('text_3_4')->nullable();
            $table->text('text_4_4')->nullable();
            $table->text('text_5_4')->nullable();
            $table->text('text_6_4')->nullable();
            $table->text('text_7_4')->nullable();
            $table->text('text_8_4')->nullable();
            $table->text('text_9_4')->nullable();
            $table->text('text_10_4')->nullable();
            $table->text('text_11_4')->nullable();
            $table->text('text_12_4')->nullable();
            $table->text('text_13_4')->nullable();
            $table->text('text_14_4')->nullable();
            $table->text('text_15_4')->nullable();
            $table->text('text_16_4')->nullable();
            $table->text('text_17_4')->nullable();
            $table->text('text_18_4')->nullable();
            $table->text('text_19_4')->nullable();
            $table->text('text_20_4')->nullable();
            $table->integer('new_id')->unsigned()->nullable();
            $table->foreign('new_id')->references('id')->on('news');
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
        Schema::dropIfExists('new_details');
    }
}
