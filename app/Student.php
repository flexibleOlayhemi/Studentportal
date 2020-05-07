<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    function course(){

        return $this->belongsToMany(\App\Courses::class)->withPivot('test_score','exam_score','total_score')->withTimestamps();
    }

    function exam(){

        return $this->belongsToMany(\App\Exam::class)->withTimestamps();
    }
}
