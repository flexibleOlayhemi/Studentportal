@extends('layouts.app')
@section('title','Test page')

@section('content')

<div class="row">
<div class="col-md-12">
<h3>Easy question section</h3>
<form action="{{ route('lecturer.addQuestion') }}" method="POST" class="pb-5">
            <div class="form-group pb-2">
                <label for="Question"> Question:</label> 
                <textarea class="form-control" name="question" id="" cols="30" rows="2"></textarea>
                                            
            </div>
            <div>
                <label for="answer">Answer:</label></br>
                <input type="checkbox" name="answer" value="true">True </br>
                <input type="checkbox" name="answer" value="false">False
            </div>
            <button>Upload</button>
            @csrf
</form>
<hr>
<h3>Uploded Questions</h3>
@foreach( $questions as $question)
    {{$question->id}} <p>{{ $question->question}}</p>
@endforeach

</div>
</div>
@endsection