<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filter')->nullable();
            $table->string('img')->nullable();
            $table->string('title')->nullable();
            $table->string('address')->nullable();
            $table->text('rating')->nullable();
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
        Schema::dropIfExists('recoms');
    }
}
