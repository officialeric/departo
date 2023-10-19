@extends('layout.master')
@section('title','All Students')

@section('content')

    <h1>List of all students</h1>
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
              <th>Registration no.</th>
              <th>Email</th>
              <th>Phone No.</th>
              <th>Class</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Doe, John John</td>
              <td>220220000000</td>
              <td>Johndoe@example.sth</td>
              <td>0789-000-000</td>
              <td>OD22IT</td>
              <td>
                <a href="#">
                  <button class="btn btn-info">View Profile</button>
                </a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Full Name</th>
              <th>Registration no.</th>
              <th>Email</th>
              <th>Phone No.</th>
              <th>Class</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection