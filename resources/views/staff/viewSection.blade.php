@extends('layout.master')
@section('title','All section')

@section('content')

    <h1>List of all section</h1>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Section Name</th>
              <th>Head Of Section</th>
              <th>Total Staffs In Section</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>IPT</td>
              <td>John Doe</td>
              <td>10</td>
              <td>
                <a href="/view-detail-section">
                  <button class="btn btn-primary"><i class="fas fa-info-circle mr-1"></i>Details</button>
                </a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Section Name</th>
              <th>Head Of Section</th>
              <th>Total Staffs In Section</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection
