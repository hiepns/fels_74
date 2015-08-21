<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTotalColumn extends Migration {

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
