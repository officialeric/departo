@extends('layout.master')
@section('title','All Tasks')

@section('content')

    <h1>List of all Tasks</h1>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Task Title</th>
              <th>Assigned To</th>
              <th>Assigned At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Task One</td>
              <td>John Doe</td>
              <td>2023-10-22</td>
              <td>
                <a href="#">
                  <button class="btn btn-primary"><i class="fas fa-info-circle mr-1"></i>Details</button>
                </a>
                <a href="#">
                  <button class="btn btn-danger"><i class="fas fa-times-circle mr-1"></i>Abort</button>
                </a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Task Title</th>
              <th>Assigned To</th>
              <th>Assigned At</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection