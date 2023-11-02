@extends('layout.master')
@section('title','All Staffs')

@section('content')

    <h1>List of all staffs</h1>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">

          <thead>
            <tr>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone No.</th>
              <th>Section</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
              @foreach($staffs as $staff)
                <tr>
                  <td>{{$staff->fullname}}</td>
                  <td>{{$staff->email}}</td>
                  <td>{{$staff->phone_no}}</td>
                  <td></td>
                  <td>
                    <a href="/view-staff-profile/{{$staff->id}}">
                      <button class="btn btn-primary"><i class="fas fa-info-circle mr-1"></i>View Profile</button>
                    </a>
                  </td>
                </tr>
              @endforeach
          </tbody>

          <tfoot>
            <tr>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone No.</th>
              <th>Section</th>
              <th>Action</th>
            </tr>
          </tfoot>

        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection
