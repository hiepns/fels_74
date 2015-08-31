<?php

class Activity extends Eloquent {

    protected $table = 'activities';
    protected $fillable = array('user_id', 'content');

    public function user()
    {
        return $this->belongsTo('User');
    }
}
