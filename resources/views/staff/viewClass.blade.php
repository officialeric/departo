@extends('layout.master')
@section('title','All classes')

@section('content')

    <h1>List of all classes</h1>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Class Name</th>
              <th>Total Students</th>
              <th>Total Modules</th>
              <th>Pass Rate</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>OD22IT</td>
              <td>80</td>
              <td>7</td>
              <td>80%</td>
              <td>
                  <a href="/view-class-detail">
                      <button class="btn btn-primary"><i class="fas fa-info-circle mr-1"></i>Details</button>
                  </a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Class Name</th>
              <th>Total Students</th>
              <th>Total Modules</th>
              <th>Pass Rate</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection
