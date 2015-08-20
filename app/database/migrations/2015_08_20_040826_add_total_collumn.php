<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTotalCollumn extends Migration {

    public function up()
    {
        Schema::table('categories', function(Blueprint $table)
        {
            $table->integer('total');
        });
    }

    public function down()
    {

    }
}
