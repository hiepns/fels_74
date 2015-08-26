<?php

class Category extends Eloquent {

    protected $table = 'categories';

    public function words()
    {
        return $this->hasMany('Word');
    }

    public function lessons()
    {
        return $this->hasMany('Lesson');
    }
}
