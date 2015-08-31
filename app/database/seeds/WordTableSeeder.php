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
        Word::create([
            'content' => 'あびる',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '歩く',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '危ない',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '医者',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '海',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => 'エレベーター',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '赤い',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '銀行',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '食堂',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '毎日',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '窓',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '安い',
            'category_id' => 1,
        ]);
        Word::create([
            'content' => '家族',
            'category_id' => 2,
        ]);
        Word::create([
            'content' => '弟',
            'category_id' => 2,
        ]);
        Word::create([
            'content' => '母',
            'category_id' => 2,
        ]);
        Word::create([
            'content' => '姉',
            'category_id' => 2,
        ]);
        Word::create([
            'content' => '姪',
            'category_id' => 2,
        ]);
        Word::create([
            'content' => '息子',
            'category_id' => 2,
        ]);
    }
}
