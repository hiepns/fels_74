<?php

class Answer extends Eloquent {

    protected $table = 'answers';

    public function word()
    {
        return $this->belongsTo('Word');
    }

}
