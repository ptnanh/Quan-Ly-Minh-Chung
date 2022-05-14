<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChucvuIdInBanthukys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banthukies', function (Blueprint $table) {
            $table->unsignedInteger('chucvu_id')->after('tenbanthuky');
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
        Schema::table('banthukys', function (Blueprint $table) {
            //
        });
    }
}
