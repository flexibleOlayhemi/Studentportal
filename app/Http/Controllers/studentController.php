<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Courses;

class studentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    public function index() {

        
        $students = DB::table('students')->paginate(10);
        
        
        return view('students.index',compact('students'));
    }

    public function selectCourse(Student $student){
        
        $student->course()->syncWithoutDetaching($this->addCourses());
        return back();
        

    }

    public function show(Student $student){
        $courses = Courses::all();
        return view('students.show',compact('student','courses'));

    }

    public function removeCourse(Student $student){
        
        $student->course()->detach(request('course'));
        return redirect('students/'.$student->id);
    }

    public function checkResults(Student $student){
            
        return view('students.result',compact('student'));
    }

    function addCourses(){
        return explode(',',implode(',',request('courses')));
    }

}
