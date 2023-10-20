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
            <tr>
              <td>John J, Doe</td>
              <td>Johndoe@example.sth</td>
              <td>0789-000-000</td>
              <td>IPT</td>
              <td>
                <a href="/view-profile">
                  <button class="btn btn-info">View Profile</button>
                </a>
              </td>
            </tr>
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