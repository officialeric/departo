@extends('layout.master')
@section('title','Add class')

@section('content')

<h4>Add Class</h4> 

<div class="card mt-3">
  <div class="card-body">
    <form class="row g-3">
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Class Name </label>
          <input type="text" class="form-control" id="inputEmail4" name="name">
        </div>
   
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
  </div>
</div>



@endsection