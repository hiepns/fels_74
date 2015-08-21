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

    public function followings()
    {
        return $this->belongsToMany('User', 'relationships', 'follower_id', 'followed_id')
            ->withTimestamps();;
    }

    public function followers()
    {
        return $this->belongsToMany('User', 'relationships', 'followed_id', 'follower_id')
            ->withTimestamps();;
    }

    public static function createValidator($isSameEmail = false)
    {
        if ($isSameEmail) {
            self::$validates['email'] = 'required|email';
        } 

        return self::$validates;
    }

    public function isFollowing($other_id)
    {
        return $this->followings()->where('followed_id', '=', $other_id)->first();
    }

    public function getAvatar()
    {
        if (empty($this->avatar)) {
            $this->avatar = 'https://d1iu1mag0u723c.cloudfront.net/assets/no-avatar-25359d55aa3c93ab3466622fd2ce712d.jpg';
        }

        return $this->avatar;
    }
}
