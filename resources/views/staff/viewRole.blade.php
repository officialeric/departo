@extends('layout.master')
@section('title','All Roles')

@section('content')

    <h1>List of all roles</h1>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Role Name</th>
              <th>Total Staffs With Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Head Of Department</td>
              <td>1</td>
              <td>
                <a href="#">
                  <button class="btn btn-info">Details</button>
                </a>
                <a href="#">
                  <button class="btn btn-danger">Remove</button>
                </a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Role Name</th>
              <th>Total Staffs With Role</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection