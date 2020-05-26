 <div class="table-responsive">
    <table id="list_table" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
           <td><b>Student Name</b></td>
          <td><b>Email</b></td>
          <td><b>Address</b></td>
         </tr>
    </thead>
    <tbody>
      <tr>
            <td>{{$data->student_name}}</td>
            <td>{{$data->student_email}}</td>
            <td>{{$data->student_address}}</td>
        </tr>
      </tbody>
  </table>
</div>