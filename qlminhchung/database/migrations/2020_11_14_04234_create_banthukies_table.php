<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanthukiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banthukies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenbanthuky');
            //  $table->integer('chucvu_id');
         //   $table->unsignedInteger('chucvu_id');
          //  $table->foreign('chucvu_id')->references('id')->on('chucvus');
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
        Schema::dropIfExists('banthukies');
    }
}
