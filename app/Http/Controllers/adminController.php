<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use\App\Student;
Use\App\Courses;

class adminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        //$this->authorize('index', Student::class);
        $student =  Student::all();
        $courses = Courses::all();

        return view('admin.index',compact('student','courses'));
    }

    public function createStudent(){
        $this->authorize('createStudent', Student::class);
        return view('admin.studentform');
    }

    public function storeStudent(){
       $data = request()->validate([
            'name' => 'required',
            'email' => 'required | email',
            'level' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'faculty' => 'required',
            
        ]);

        Student::create($data);
        return redirect('admin');
    }
    public function destroy(Student $student){
        $id = request('id');
        $student->where('id',$id)->delete();
        return back();
    }
    
}
