<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    function student(){

        return $this->belongsToMany(\App\Student::class)->withTimestamps();
    }
    
    function exam(){

        return $this->belongsToMany(\App\Exam::class)->withTimestamps();
    }
}
