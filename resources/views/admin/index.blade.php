@extends('layouts.app')
@section('title','Admin Index')

@section('content')
<div class="container">
 
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
             @can('createStudent',\App\Student::class)
                <a href="{{ route('admin.addstudent')}}"> <button class="btn btn-primary m-3"> Add new student</button></a>
             @endcan
             @can('createCourse',\App\Courses::class)
                <a href="{{ route('admin.addcourse')}}"> <button class="btn btn-primary m-3"> Add new course</button></a>
             @endcan
             
             
             
        </div>
    </div>
    @can('index',\App\Student::class)
        <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Sudent List</div>

                    <div class="card-body">
                        <div class="row">
                            
                                
                                    @foreach( $student as $student)
                                    
                                        <div class="col-8 py-3">
                                            {{$student->name}}   
                                        </div>
                                        <div class="col-4 py-3">
                                            @can('destroy',\App\Student::class)
                                                
                                                    <form action="{{ route('admin.destroy')}}" method="post">
                                                    @method('delete')
                                                    <button class="btn btn-danger" name="id" value="{{$student->id}}">Delete</button>
                                                    @csrf
                                                    </form>
                                                
                                            @endcan
                                        </div>
                                    
                                    @endforeach
                                
                            
                            
                        </div>

                       
                    </div>
                </div>
        </div>

        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Available Courses</div>

                    <div class="card-body"> 
                        <ul>
                            @foreach( $courses as $course)
                            
                                <li>{{$course->title}} </li> 
                            
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    @endcan

    @cannot('index',\App\Student::class)
    <h4 class="alert alert-danger">{{ 'Only Administrators can see this page!!!' }} </h4>
    @endcannot
    
</div>
@endsection
