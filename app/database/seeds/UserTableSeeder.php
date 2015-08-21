<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            User::create([
                'username' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
