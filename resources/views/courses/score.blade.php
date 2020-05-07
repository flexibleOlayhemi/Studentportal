@extends('layouts.app')


@section('title','Scores Upload')

@section('content')

  
<div class="row justify-content-center">
<div class="col-10">
   <div class="row">
       <div class="col-12">
       <h4 class="pb-3">Upload {{$course->title}} Scores for {{$student->name}}</h4>
       </div>
   </div>
    <form action="/courses/{{$course->id}}/{{$student->id}}" method="POST" class="pb-5">
        @method('patch')
        <div class="row">
            <div class="col-6">
                <div class="form-group pb-2">
                    <label for="ts"> Test Score:</label> 
                    <input type="number" class="form-control" name="ts">
                    <div>{{ $errors->first('ts') }}</div>
                    
                </div>
            </div>
            <div class="col-6">
                <div class="form-group pb-2">
                    <label for="ts"> Exam Score:</label> 
                    <input type="number" class="form-control" name="es">
                    <div>{{ $errors->first('es') }}</div>
                    
                </div>
            </div>
        </div>
        <button type ="submit" class="btn btn-primary">Upload Score</button>
        
        @csrf
            
    </form>
    </div>
</div>
@endsection