<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegmentResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('SegmentResponse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapterId');
            $table->integer('segmentId');
            $table->integer('responseId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('SegmentResponse');
    }
}
