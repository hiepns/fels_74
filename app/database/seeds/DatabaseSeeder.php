<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('AdministratorTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('WordTableSeeder');
        $this->call('AnswerTableSeeder');
    }

}
