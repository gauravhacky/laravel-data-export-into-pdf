@extends('layouts.master')
@section('content')
@section('title','create student')
<style>
  .uper {
    margin-top: 40px;
  }
  .error {
    color: red;
    font-size: 12px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('pdf.create')}}">Add new Student</a>
  </div>
  <br/>
  <div class="card-body">
  <form method="post" id="addstudent" name="addstudent" action="{{route('pdf.store')}}">
         @csrf
          <div class="form-group">
             <label for="name">Student Name:</label>
              <input type="text" class="form-control" name="student_name" id="name" />
               @error('student_name')
                <div class="error">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
             <label for="author">Email:</label>
              <input type="text" class="form-control" name="student_email" id="author" />
               @error('student_email')
                <div class="error">{{ $message }}</div>
                @enderror
          </div>
         <div class="form-group">
              <label for="description">Address:</label>
              <textarea name="student_address" id="address" class="form-control"></textarea>
               @error('student_address')
                <div class="error">{{ $message }}</div>
                @enderror
         </div>
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection


