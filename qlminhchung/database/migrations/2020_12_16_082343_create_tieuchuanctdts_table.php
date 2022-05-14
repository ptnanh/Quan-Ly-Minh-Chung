<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatetieuchuanctdtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieuchuanctdts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentieuchuan');
            $table->string('tencap')->nullable();
            $table->text('noidung');
         //   $table->integer('cap_id');
         //   $table->unsignedInteger('cap_id');
        //    $table->foreign('cap_id')->references('id')->on('caps');
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
        Schema::dropIfExists('tieuchuanctdts');
    }
}
