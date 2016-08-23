<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Decision', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapterId');
            $table->integer('decisionId');
            $table->integer('ifTrueDecisionId');
            $table->integer('ifFalseDecisionId');
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
        Schema::drop('Decision');
    }
}
