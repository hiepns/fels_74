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

    public function scopeGroupLesson($query, $lesson_id)
    {
        return $query->where('lesson_id', $lesson_id)->lists('answer_id');
    }
}
