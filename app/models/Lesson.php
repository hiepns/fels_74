<?php

class Lesson extends Eloquent {

    protected $table = 'lessons';

    public function words()
    {
        return $this->belongsToMany('Word', 'lesson_words');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
