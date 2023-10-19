@extends('layout.master')
@section('title','Add Module')

@section('content')

<h4>Add Module</h4> 

<div class="card mt-3">
  <div class="card-body">
    <form class="row g-3">
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Module Name </label>
          <input type="text" class="form-control" id="inputEmail4" name="name">
        </div>
   
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Module Code </label>
            <input type="text" class="form-control" id="inputEmail4" name="mcode" readonly value="MDL01">
          </div>

          <div class="container ">
            <div class="select-btn">
                <span class="btn-text">Select Classes</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">OD22IT</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">OD22IT</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">OD22IT</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">OD22IT</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">OD22IT</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">OD22IT</span>
                </li>
            </ul>
        </div>
       

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
  </div>
</div>

@endsection