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
              <th>Phone No.</th>
              <th>Class</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->registration_no }}</td>
                    <td><a href="tel:{{ $student->registration_no }}">{{ $student->phone_no }}</a></td>
                    <td>{{ $student->class_id }}</td>
                    <td>
                        <a href="/view-profile-student/{{ $student->id }}">
                            <button class="btn btn-primary"><i class="fas fa-info-circle mr-1"></i>View Profile</button>
                        </a>
                    </td>
                </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Full Name</th>
              <th>Registration no.</th>
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
