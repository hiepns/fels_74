<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWords extends Migration {

    public function up()
    {
        Schema::create('words', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('content', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('words');
    }

}
