<?php

class LessonWord extends Eloquent {

    protected $table = 'lesson_words';

    public function word()
    {
        return $this->belongsTo('Word');
    }

    public function lesson()
    {
        return $this->belongsTo('Lesson');
    }

}
