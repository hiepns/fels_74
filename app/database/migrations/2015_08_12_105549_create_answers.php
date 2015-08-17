<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswers extends Migration {

    public function up()
    {
        Schema::create('answers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('word_id');
            $table->string('content', 100);
            $table->boolean('correct');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('answers');
    }

}
