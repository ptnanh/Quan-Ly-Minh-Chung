<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhombaocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhombaocaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tennhombaocao');
           // $table->unsignedInteger('chucvu_id');
           // $table->foreign('chucvu_id')->references('id')->on('chucvus');
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
        Schema::dropIfExists('nhombaocaos');
    }
}
