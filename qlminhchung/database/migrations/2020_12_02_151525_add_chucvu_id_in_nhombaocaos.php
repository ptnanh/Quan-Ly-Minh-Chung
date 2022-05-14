<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChucvuIdInNhombaocaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nhombaocaos', function (Blueprint $table) {
            $table->unsignedInteger('chucvu_id')->after('tennhombaocao');
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
        Schema::table('nhombaocaos', function (Blueprint $table) {
            //
        });
    }
}
