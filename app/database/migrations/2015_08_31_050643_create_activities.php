<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivities extends Migration {

    public function up()
    {
        Schema::create('activities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('activities', function(Blueprint $table)
        {

        });
    }
}
