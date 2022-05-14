<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatebaocaoctdtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaoctdts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenbaocao');
            $table->string('tentieuchuan');
            $table->string('tentieuchi');
            $table->string('tenctdt');
            $table->string('danhgia');
            $table->text('noidungbaocao');
            $table->string('tennhombaocao');
            $table->string('sohieuminhchung')->nullable();
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
        Schema::dropIfExists('baocaoctdts');
    }
}
