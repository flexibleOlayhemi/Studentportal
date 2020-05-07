@extends('layouts.app')


@section('title','Details for '. $course->title)

@section('content')

@if(session()->has('message'))
<div class="row">
    <div class="col-12">
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
    </div>
</div>
@endif

<div class="row justify-content-center">
   
    <div class="col-10">
            <div class="form-group pb-3">
                <strong>Details for {{ $course->title }} :</strong>
            </div>
      <p><strong> Title:</strong> {{ $course->title}}</p>
      <p><strong> Coordinator:</strong> {{ $course->coordinator}}</p>
      <p><strong> Level: </strong>{{ $course->level}}</p>
      <p><strong> Code: </strong>{{ $course->code}}</p>
      <p><strong> Unit: </strong>{{ $course->unit}}</p>
      <hr>
      <div class="card">
                <div class="card-header">Students Offering  {{ $course->title }}</div>

                    <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <strong>Name</strong>
                                </div>
                                <div class="col-3">
                                <strong>Department</strong>
                                </div>
                                <div class="col-2">
                                <strong>Level</strong>
                                </div>
                            </div>
                        
                            @foreach( $course->student as $student) 
                            <div class="row">
                                <div class="col-4 py-2">
                                     {{$student->name}} 
                                </div>
                                <div class="col-3 py-2">
                                    {{$student->department}}
                                </div>
                                <div class="col-2 py-2">
                                    {{$student->level}}
                                </div>
                                <div class="col-3 py-2">
                                <a href="/courses/{{$course->id}}/{{$student->id}}"><button class="btn btn-primary"> Upload Result</button></a>
                                </div>
                            </div> 
                                
                            @endforeach 
                    </div>
        </div>
    </div>
</div>
@endsection