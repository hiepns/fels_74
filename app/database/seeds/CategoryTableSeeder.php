<?php

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        Category::create([
            'name' => 'Basic 500',
            'total' => 50,
            'icon' => '',
        ]);
        Category::create([
            'name' => 'Family',
            'total' => 50,
            'icon' => '',
        ]);
    }
}
