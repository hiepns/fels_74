<?php

class Word extends Eloquent {

    protected $table = 'words';

    public function answers()
    {
        return $this->hasMany('Anser');
    }

    public function lessons()
    {
        return $this->belongsToMany('Lesson', 'lesson_words');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }

}
