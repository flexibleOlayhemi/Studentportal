@extends('layouts.app')


@section('title','Results for '. $student->name)

@section('content')

  
<div class="row">
    <div class="col-12">
            <div class="form-group pb-3">
                <strong>{{ $student->name }} Details:</strong>
            </div>
      <p><strong> Email:</strong> {{ $student->email}}</p>
      <p><strong> Department: </strong>{{ $student->department}}</p>
      <p><strong> faculty: </strong>{{ $student->faculty}}</p>
      <p><strong> Level: </strong>{{ $student->level}}</p>
      <hr>
      <div class ="d-flex table-data">
			<div class="table table-striped ">
  				<table class="table" >
						<thead class="thead-dark">
							<tr>
								<th>Course title</th>
								<th>Course code</th>
								<th>Unit</th>
								<th>Test score</th>
								<th>Exam score</th>
                                <th>Total</th>
							</tr>
						</thead>
                        <tbody>
                        @foreach($student->course as $course)
                            <tr>
                                <td>{{$course->title}}</td>
                                <td>{{$course->code}}</td>
                                <td>{{$course->unit}}</td>
                                <td>{{ $course->pivot->test_score }}</td>
                                <td>{{ $course->pivot->exam_score }}</td>
                                <td>{{ $course->pivot->total_score }}</td>
                            </tr>
                        @endforeach
                        </tbody>
        </div>
</div>
@endsection