<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoidongdanhgiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoidongdanhgias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenhoidongdanhgia');
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
        Schema::dropIfExists('hoidongdanhgias');
    }
}
