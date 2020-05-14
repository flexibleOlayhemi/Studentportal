@extends('layouts.app')


@section('title','Add Student')

@section('content')
<div class="row justify-content-center">
   <div class="col-8">
    <div class="row pb-3">
        <div class="col-12">
            <h3>Add new Student</h3>
        </div>
    </div>
    <form action="{{ route('admin.storestudent') }}" method="POST" class="pb-5">
        <div class="form-group pb-2">
                <label for="Name"> Name:</label> 
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                <div>{{ $errors->first('name') }}</div>
                
            </div>

            <div class="form-group pb-2">
                <label for="email"> Email:</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
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
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Select Gender</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>       
                </select>
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <select name="department" id="department" class="form-control">
                    <option value="" disabled>Select Department</option>
                    <option value="ENGLISH" >ENGLISH</option>
                    <option value="CHEMISTRY" >CHEMISTRY</option>
                    <option value="COMPUTER" >COMPUTER</option>
                    <option value="MATHEMATICS" >MATH</option>
                    <option value="BIOLOGY" >BIOLOGY</option>  
                </select>
            </div>

            <div class="form-group">
                <label for="faculty">Faculty</label>
                <select name="faculty" id="faculty" class="form-control">
                    <option value="" disabled>Select Gender</option>
                    <option value="TECHNOLOGY" >TECHNOLOGY</option>
                    <option value="ART" >ART</option>  
                    <option value="SCIENCE" >SCIENCE</option> 
                    <option value="AGRIC" >AGRIC</option>        
                </select>
            </div>

        <button type ="submit" class="btn btn-primary">Add Student</button>
        
        @csrf

    </form>
</div>
</div>
@endsection