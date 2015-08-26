<?php

class Word extends Eloquent {

    protected $table = 'words';

    public function answers()
    {
        return $this->hasMany('Answer');
    }

    public function lessons()
    {
        return $this->belongsToMany('Lesson', 'lesson_words');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function scopeLearnedWords($query, $userLessonWords, $category_id)
    {
        return $query->whereIn('id', $userLessonWords)
               ->where('category_id', '=', $category_id)
               ->get();
    }

    public function scopeNotLearnedWords($query, $userLessonWords, $category_id)
    {
        return $query->whereNotIn('id', $userLessonWords)
               ->where('category_id', '=', $category_id)
               ->get();
    }
}
