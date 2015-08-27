<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionToCategoryTable extends Migration {

    public function up()
    {
        Schema::table('categories', function(Blueprint $table)
        {
            $table->string('description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('categories', function(Blueprint $table)
        {

        });
    }
}
