<?php

class AnswerTableSeeder extends Seeder {

    public function run()
    {
        Answer::create([
            'content' => 'Tiếng Nhật',
            'word_id' => 1,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Người Nhật',
            'word_id' => 1,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tiếng Việt',
            'word_id' => 1,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Người Việt',
            'word_id' => 1,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Hoa',
            'word_id' => 2,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Lá',
            'word_id' => 2,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cây',
            'word_id' => 2,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Cành',
            'word_id' => 2,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Trâu',
            'word_id' => 3,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Bò',
            'word_id' => 3,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Lợn',
            'word_id' => 3,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Người',
            'word_id' => 3,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Chân',
            'word_id' => 4,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tay',
            'word_id' => 4,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Mũi',
            'word_id' => 4,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Mắt',
            'word_id' => 4,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Tay',
            'word_id' => 5,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Chân',
            'word_id' => 5,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Mũi',
            'word_id' => 5,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Mắt',
            'word_id' => 5,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Đẹp',
            'word_id' => 6,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Xấu',
            'word_id' => 6,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Bẩn',
            'word_id' => 6,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Khác',
            'word_id' => 6,
            'correct' => false
        ]);
    }
}
