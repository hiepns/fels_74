<?php

class Answer extends Eloquent {

    protected $table = 'answers';
    protected $fillable = ['word_id', 'content', 'correct'];

    public function word()
    {
        return $this->belongsTo('Word');
    }

    public function scopeChosen($query, $lessonWords)
    {
    	return $query->whereIn('id', $lessonWords)->get();
    }
}
