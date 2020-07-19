<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('question_id');
            $table->foreignId('question_discuss_id');
            $table->string('question_content');
            $table->string('question_status', 1);
            $table->timestamps();
            $table->foreign('question_discuss_id')->references('discuss_id')->on('discuss')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['question_discuss_id']);
        });
        Schema::dropIfExists('questions');
    }
}
