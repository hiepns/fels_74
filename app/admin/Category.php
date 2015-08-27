<?php

Admin::model('Category')->title('Categories')->columns(function () {
    Column::image('icon', 'Icon');
    Column::string('name', 'Name');
    Column::string('total', 'Total');
})->form(function () {
    FormItem::text('name', 'Name')->unique()->required();
    FormItem::text('total', 'Total');
    FormItem::image('icon', 'Icon');
});
