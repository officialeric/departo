@extends('layout.master')
@section('title','All module')

@section('content')

    <h1>List of all modules</h1>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Module Name</th>
              <th>Module Code</th>
              <th>Total Classes With Module</th>
              <th>Total Staffs In Module</th>
              <th>Pass Rate</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Networking</td>
              <td>COT4413</td>
              <td>10</td>
              <td>4</td>
              <td>80%</td>
              <td>
                  <a href="/view-detail-module">
                      <button class="btn btn-primary"><i class="fas fa-info-circle mr-1"></i>Details</button>
                  </a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Module Name</th>
              <th>Module Code</th>
              <th>Total Classes With Module</th>
              <th>Total Staffs In Module</th>
              <th>Pass Rate</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection
