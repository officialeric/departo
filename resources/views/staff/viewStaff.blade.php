@extends('layout.master')
@section('title','All Staffs')

@section('content')

    <h1>List of all staffs</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S/N</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Module(s)</th>
            <th scope="col">Class(es)</th>
            <th scope="col">Phone</th>
            <th scope="col">Section</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>John Doe</td>
            <td>johndoe@example.sth</td>
            <td>Networking, Computer Maintenance, Programming</td>
            <td>OD22IT, OD22COE, OD22MFT</td>
            <td>0625-000-000</td>
            <td>IPT</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
        </tbody>
      </table>

@endsection