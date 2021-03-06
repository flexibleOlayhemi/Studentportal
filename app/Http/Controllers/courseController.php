<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Courses;


class courseController extends Controller
{

    public function __construct(){
        $this->middleware('auth');

    }
    public function index(){
        $courses = Courses::all();

        return view('courses.index',compact('courses'));
    }

    public function show(Courses $course){
        
        return view('courses.show',compact('course'));

    }

    public function score(Courses $course,Student $student){

        return view('courses.score',compact('course','student'));
    }

    public function upload(Courses $course, Student $student){
        DB::table('courses_student')
        ->where('student_id',$student->id)
        ->where('courses_id',$course->id)
        ->update(['test_score'=> request('ts'),'exam_score'=> request('es'),'total_score' => (request('ts') + request('es'))]);   
         
         return redirect()->route('courses.show',['course' => $course])->with('message','Score Uploaded');
    }

    
}
