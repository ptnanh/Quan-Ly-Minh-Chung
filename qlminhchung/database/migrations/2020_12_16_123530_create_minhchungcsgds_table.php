<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateminhchungcsgdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minhchungcsgds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenminhchung');
            $table->string('noibanhanh');
            $table->dateTime('ngaybanhanh');
            $table->string('sohieu');
            $table->string('tentieuchuan');
            $table->string('tentieuchi');
            $table->string('tencap')->nullable();
            $table->text('noidung');
            $table->text('file')->nullable();
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
        Schema::dropIfExists('minhchungcsgds');
    }
}
