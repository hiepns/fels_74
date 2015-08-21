<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColumnUsersTable extends Migration {

    public function up()
    {
        DB::statement('ALTER TABLE `users` MODIFY `email` VARCHAR(100) UNIQUE;');
        DB::statement('ALTER TABLE `users` MODIFY `avatar` TEXT NULL;');
        DB::statement('ALTER TABLE `users` MODIFY `remember_token` TEXT NULL;');
    }

    public function down()
    {

    }
}
