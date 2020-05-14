@extends('layouts.app')
@section('title','Courses Index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">Available Courses</div>

                <div class="card-body"> 
                    <ul>
                        @foreach( $courses as $course)
                        
                            <a href="{{route('courses.show',['course' => $course])}}"><li>{{$course->title}} </li></a>  
                        
                        @endforeach
                    </ul>
                </div>
            </div>
    </div>
    
</div>
@endsection
