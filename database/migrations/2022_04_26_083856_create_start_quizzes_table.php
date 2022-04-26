<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->unsigned();
            $table->unsignedBigInteger('quiz_create_id')->unsigned();
            $table->string('wrong_ans');
            $table->string('right_ans');
            $table->foreign('student_id')->references('id')->on('student_information')->onDelete('cascade');
            $table->foreign('quiz_create_id')->references('id')->on('quiz_creates')->onDelete('cascade');
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
        Schema::dropIfExists('start_quizzes');
    }
}
