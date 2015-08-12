<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessons extends Migration {

    public function up()
    {
        Schema::create('lessons', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('lessons');
    }

}
