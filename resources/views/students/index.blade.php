@extends('layouts.app')
@section('title','Student Index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student List</div>

                <div class="card-body"> 
                    <ul>
                        @foreach( $students as $stud)
                            <a href="/students/{{ $stud->id }}">  <li>{{$stud->name}} </li></a>
                        @endforeach
                    </ul>
                </div>        
            </div>
                   {{ $students->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
