<?php

Admin::model('Word')->title('Word list')->columns(function () {
    Column::string('content', 'Word');
    for ($i = 1; $i <= 4; $i++) {
        Column::arrays('answers.content', 'Answers '.$i)->at($i-1);
    }
    Column::arrays('answers.correct', 'True Answer')->getTrueAns();
    Column::string('category.name', 'Category');

})->form(function () {
    FormItem::text('content', 'Word')->required();
    FormItem::select('category_id', 'Category')->list('Category')->required();
    for ($i = 1; $i <= 4; $i++) {
        FormItem::text('answers.content', 'Answer '.$i);
        FormItem::checkbox('answers.correct', 'Correct');
    }
});
