<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recom_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('img_5')->nullable();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->text('about')->nullable();
            $table->string('address')->nullable();
            $table->string('hour')->nullable();
            $table->string('price')->nullable();
            $table->text('rating')->nullable();
            $table->text('map')->nullable();
            $table->integer('recom_id')->unsigned()->nullable();
            $table->foreign('recom_id')->references('id')->on('recoms');
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
        Schema::dropIfExists('recom_details');
    }
}
