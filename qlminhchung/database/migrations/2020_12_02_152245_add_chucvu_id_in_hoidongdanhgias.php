<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChucvuIdInHoidongdanhgias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoidongdanhgias', function (Blueprint $table) {
            $table->unsignedInteger('chucvu_id')->after('tenhoidongdanhgia');
            $table->foreign('chucvu_id')
                ->references('id')->on('chucvus')
                -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoidongdanhgias', function (Blueprint $table) {
            //
        });
    }
}
