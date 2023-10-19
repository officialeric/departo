@extends('layout.master')
@section('title','Add Section')

@section('content')

<h4>Add Section</h4> 

    <div class="card mt-3">
      <div class="card-body">
        <form class="row g-3">
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Section Name <sup class="text-danger">***</sup></label>
              <input type="text" class="form-control" id="inputEmail4" name="name">
            </div>
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description <sup class="text-secondary">***</sup></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Section Code</label>
              <input type="text" class="form-control" id="inputCity" readonly name="stcode" value="ST01">
            </div>
            
            {{-- <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div> --}}
           
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