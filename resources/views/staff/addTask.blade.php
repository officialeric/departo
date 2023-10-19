@extends('layout.master')
@section('title','Add Task')

@section('content')


<h4>Add Task</h4> 

    <div class="card mt-3">
      <div class="card-body">
        <form class="row g-3">
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Task Name <sup class="text-danger">***</sup></label>
              <input type="text" class="form-control" id="inputEmail4" name="fname">
            </div>
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description <sup class="text-danger">***</sup></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
           
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Dead Line <sup class="text-danger">***</sup></label>
              <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
           
            <div class="col-md-6">
              <label for="inputState" class="form-label">Staff <sup class="text-secondary">***</sup></label>
              <select id="inputState" class="form-select">
                <option selected>None</option>
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