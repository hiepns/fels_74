<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonWords extends Migration {

    public function up()
    {
        Schema::create('lesson_words', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('lesson_id');
            $table->integer('word_id');
            $table->integer('answer_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('lesson_words');
    }

}
