@extends('layouts.app')


@section('title','Add Courses')

@section('content')
<div class="row justify-content-center">
   <div class="col-8">
    <div class="row pb-3">
        <div class="col-12">
            <h3>Add new Course</h3>
        </div>
    </div>
    <form action="{{ route('admin.storecourse') }}" method="POST" class="pb-5">
    @method('PUT')
            <div class="form-group pb-2">
                <label for="Name"> Title:</label> 
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                <div>{{ $errors->first('title') }}</div>
                
            </div>

            <div class="form-group pb-2">
                <label for="email"> Code:</label>
                <input type="text" class="form-control" name="code" value="{{ old('code') }}">
                <div>{{ $errors->first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <select name="level" id="level" class="form-control">
                    <option value="" disabled>Select level</option>
                    <option value="100" >100</option>
                    <option value="200" >200</option>
                    <option value="300" >300</option>
                    <option value="400" >400</option>
                    <option value="500" >500</option>  
                </select>
            </div>

            <div class="form-group">
                <label for="gender">Unit</label>
                <select name="unit" id="unit" class="form-control">
                    <option value="" disabled>Select unit</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>  
                </select>
            </div>
            <div class="form-group pb-2">
                <label for="coordinator"> Coordinator:</label>
                <input type="text" class="form-control" name="coordinator" value="{{ old('coordinator') }}">
                <div>{{ $errors->first('coordinator') }}</div>
            </div>

            
        <button type ="submit" class="btn btn-primary">Add Course</button>
        
        @csrf

    </form>
</div>
</div>
@endsection