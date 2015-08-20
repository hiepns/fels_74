<?php

use Faker\Factory as Faker;

class AdministratorTableSeeder extends Seeder {

    public function run()
    {
        Administrator::create(array(
            'username' => 'admin',
            'password' => Hash::make('admin@123'),
            'name' => 'admin',
            'remember_token' => NULL,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ));
    }

}
