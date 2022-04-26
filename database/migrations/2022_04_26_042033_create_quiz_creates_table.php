<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizCreatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_creates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_bank_id')->unsigned();
            $table->foreign('question_bank_id')->references('id')->on('question_banks')->onDelete('cascade');
            $table->unsignedBigInteger('quiz_list_id')->unsigned();
            $table->foreign('quiz_list_id')->references('id')->on('quiz_lists')->onDelete('cascade');
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
        Schema::dropIfExists('quiz_creates');
    }
}
