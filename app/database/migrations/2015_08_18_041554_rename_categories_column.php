<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCategoriesColumn extends Migration {

    public function up()
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->renameColumn('category_name', 'name');
            $table->renameColumn('category_icon', 'icon');
        });
    }

    public function down()
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->renameColumn('name', 'category_name');
            $table->renameColumn('icon', 'category_icon');
        });
    }

}
