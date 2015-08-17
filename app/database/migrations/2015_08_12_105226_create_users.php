<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('email', 100);
            $table->string('password', 64);
            $table->text('avatar');
            $table->boolean('admin');
            $table->text('remember_token');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }

}
