<?php

Admin::model('Word')->title('Word list')->columns(function () {
    Column::string('content', 'Word');
    for ($i = 1; $i <= 4; $i++) {
        Column::arrays('answers.content', 'Answers '.$i)->at($i-1);
    }
    Column::arrays('answers.correct', 'True Answer')->getTrueAns();
    Column::string('category.name', 'Category');

})->form(function () {
    FormItem::text('content', 'Word')->unique()->attributes(['required']);
    FormItem::select('category_id', 'Category')->list('Category')->attributes(['required']);
    FormItem::textNestedItem()->setData('answers', 'Answer')->setTotal(4)->required();
    FormItem::selectNestedItem()->setData('trueAnswer', 'True Answer')->list(['Answer1', 'Answer2', 'Answer3', 'Answer4'])->required();
});
