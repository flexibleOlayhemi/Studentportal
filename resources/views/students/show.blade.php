@extends('layouts.app')


@section('title','Details for '. $student->name)

@section('content')

  
<div class="row">
   <div class="col-4">
        <form action="/students/{{$student->id}}" method="POST" class="pb-5">
            
            <div class="form-group">
                <label for="courses">Courses</label>
                <select multiple name="courses[]" required id="courses" class="form-control">
                    <option value="" disabled><strong>Select course/ hold cntr to multi select</strong></option>
                    @foreach($courses as $course)
                    <option value="{{ $course->id}}">{{ $course->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type ="submit" class="btn btn-primary">Add course/s</button>
            @csrf
        </form>
        <hr>
        <form action="/students/{{$student->id}}" method="post">
            @method('options')
            <button name="course" value="{{$course->id}}" class="btn btn-primary ">View Raw Scores</button>
        </form>
    </div>
    <div class="col-8">
            <div class="form-group pb-3">
                <strong>{{ $student->name }} Details:</strong>
            </div>
      <p><strong> Name:</strong> {{ $student->name}}</p>
      <p><strong> Email:</strong> {{ $student->email}}</p>
      <p><strong> Department: </strong>{{ $student->department}}</p>
      <p><strong> faculty: </strong>{{ $student->faculty}}</p>
      <p><strong> Level: </strong>{{ $student->level}}</p>
      <hr>
      <div class="card">
                <div class="card-header">Registered Courses</div>

                    <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <strong>Course Title</strong>
                                </div>
                                <div class="col-2">
                                <strong>Code</strong>
                                </div>
                                <div class="col-4">
                                <strong>Course Coordinator</strong>
                                </div>
                            </div>
                        
                            @foreach( $student->course as $course) 
                            <div class="row">
                                <div class="col-4 py-2">
                                    {{$course->title}}
                                </div>
                                <div class="col-2 py-2">
                                    {{$course->code}}
                                </div>
                                <div class="col-4 py-2">
                                    {{$course->coordinator}}
                                </div>
                                <div class="col-2 py-2">
                                    <form action="/students/{{$student->id}}" method="post">
                                        @method('DELETE')
                                        <button name="course" value="{{$course->id}}" class="btn btn-danger ">Remove</button>
                                     @csrf
                                    </form>
                                </div>
                            </div> 
                                
                            @endforeach 
                    </div>
        </div>
    </div>
</div>
@endsection