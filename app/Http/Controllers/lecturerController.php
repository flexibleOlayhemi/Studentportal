<?php

namespace App\Http\Controllers;
use App\lecturer;
use App\Student;
use App\Courses;
use App\Question;

use Illuminate\Http\Request;

class lecturerController extends Controller
{
    function index(){
        return view('Lecturer.index');
    }
    function createTest(Question $questions){
        dd($questions);
        return view('Lecturer.test',compact('questions'));
        
    }
    function addQuestion(){
        Question::create(['question'=>request('question'),'answer'=>request('answer')]);
     return back();
    }
}
