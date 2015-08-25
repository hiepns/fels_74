<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

// Create admin model from User class with title and url alias
Admin::model('User')->title('Users Manager')->as('users')->columns(function () {
    // Describing columns for table view
    Column::string('username', 'User name');
    Column::string('email', 'Email');
})->form(function () {
    // Describing elements in create and editing forms
    FormItem::text('username', 'Name')->required();
    FormItem::text('email', 'Email')->unique()->validationRule('required|email');
    FormItem::password('password','Password')->validationRule('required|min:6|confirmed');
    FormItem::password('password_confirmation','Password Confirmation')->validationRule('required|min:6');
});
