<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategories extends Migration {

    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('category_name', 50);
            $table->text('category_icon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('categories');
    }

}
