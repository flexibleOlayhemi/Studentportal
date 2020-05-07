<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $gaurded = [];

    function student(){

        return $this->belongsToMany(\App\Student::class)->withPivot('test_score','exam_score','total_score')->withTimestamps();
    }
    function exam(){

        return $this->belongsToMany(\App\Exam::class)->withTimestamps();
    }
}
