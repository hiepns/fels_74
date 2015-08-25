<?php

class WordTableSeeder extends Seeder {

    public function run()
    {
        Word::create([
            'content' => '日本語',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '木',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '人',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '手',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '足',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => 'きれい',
            'category_id' => 1,
        ]);
    }
}
