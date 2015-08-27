<?php

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;
use SleepingOwl\Models\SleepingOwlModel;

class Category extends SleepingOwlModel implements ModelWithImageFieldsInterface {

    use ModelWithImageOrFileFieldsTrait;

    protected $table = 'categories';
    protected $fillable = ['icon', 'name', 'total'];

    public function words()
    {
        return $this->hasMany('Word');
    }

    public function lessons()
    {
        return $this->hasMany('Lesson');
    }

    public function getImageFields()
    {
        return [
            'icon' => 'Category/'
        ];
    }

    public static function getList()
    {
        return static::lists('name', 'id');
    }
}
