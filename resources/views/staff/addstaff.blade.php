@extends('layout.master')
@section('title','Add Staff')

@section('content')

<h4>Add Staff Member</h4> 

    <div class="card mt-3">
      <div class="card-body">
        <form class="row g-3">
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Full Name <sup class="text-danger">***</sup></label>
              <input type="text" class="form-control" id="inputEmail4" name="fname">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Email <sup class="text-danger">***</sup></label>
              <input type="email" class="form-control" id="inputPassword4" name="email">
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Phone Number <sup class="text-danger">***</sup></label>
              <input type="number" class="form-control" id="inputAddress"  name="pnumber"  placeholder="0**********">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address <sup class="text-danger">***</sup></label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Staff Code</label>
              <input type="text" class="form-control" id="inputCity" readonly name="scode" value="STFF01">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Role <sup class="text-danger">***</sup></label>
              <select id="inputState" class="form-select">
                <option selected>Choose role...</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
            {{-- <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div> --}}
            <div class="col-md-6">
                <label for="inputState" class="form-label">Section <sup class="text-secondary">***</sup></label>
                <select id="inputState" class="form-select">
                  <option selected>None</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                </select>
              </div>
           
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
      </div>
    </div>

    <div class="card">
        <div class="card-header">Note:</div>
        <div class="card-body">
            <sup class="text-danger">***</sup> Required fields <br>
            <sup class="text-secondary">***</sup> Optional Fields
        </div>
    </div>
@endsection