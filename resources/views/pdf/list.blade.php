@extends('layouts.master')
@section('content')
@section('title','Student List')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

  <div class="card uper">

  <div class="card-header">
    <a class="btn btn-primary" href="{{route('pdf.create')}}">Add new Record</a>
  </div>
  <br/>
  <div class="card-body">
     @if(Session::has('flash_message_error'))
        <div class="alert alert-sm alert-danger alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times; </span>
        </button>
        <strong>{!! session('flash_message_error')!!} </strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-sm alert-success alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times; </span>
        </button>
        <strong>{!! session('flash_message_success')!!} </strong>
        </div>
        @endif
         <div class="table-responsive">
    <table id="list_table" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
          <td><b>Sr.No</b></td>
          <td><b>Student Name</b></td>
          <td><b>Email</b></td>
          <td><b>Address</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
      @foreach($data as $key=>$stuData)
       <tr>
            <td>{{$key+1}}</td>
            <td>{{$stuData->student_name}}</td>
            <td>{{$stuData->student_email}}</td>
            <td>{{$stuData->student_address}}</td>
            <td>
              <a href="{{route('pdf.export',$stuData->id)}}" class="btn btn-success" href="">Download</a>
           </td>
        </tr>
        @endforeach
      </tbody>
  </table>
</div>
  </div>
</div>
@endsection
