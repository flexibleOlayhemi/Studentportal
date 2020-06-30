<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    protected $guarded = [];

    function student(){
        return $this->hasMany(\App\Student::class);
    }
}
