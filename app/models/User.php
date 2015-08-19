<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'users';
    protected $hidden = array('password', 'remember_token');
    protected $fillable = array('username', 'email', 'password');

    protected static $validates = [
        'username' => 'required',
        'email'  => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6'
    ];

    public function lessons()
    {
        return $this->hasMany('Lesson');
    }

    public static function createValidator($isSameEmail = false)
    {
        if ($isSameEmail) {
            self::$validates['email'] = 'required|email';
        } 

        return self::$validates;
    }
}
