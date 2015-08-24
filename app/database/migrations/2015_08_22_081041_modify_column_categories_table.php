<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColumnCategoriesTable extends Migration {

    public function up()
    {
        DB::statement('ALTER TABLE `categories` MODIFY `icon` TEXT NULL;');
    }

    public function down()
    {
        
    }
}
