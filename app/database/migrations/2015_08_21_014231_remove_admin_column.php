<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAdminColumn extends Migration {

    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('admin');
        });
    }

    public function down()
    {

    }
}
