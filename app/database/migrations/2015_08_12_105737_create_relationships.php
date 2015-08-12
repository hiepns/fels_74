<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationships extends Migration {

    public function up()
    {
        Schema::create('relationships', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('follower_id');
            $table->integer('followed_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('relationships');
    }

}
