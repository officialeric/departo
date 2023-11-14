@extends('layout.master')
@section('title','Message')

@section('content')


<h3>Information Hub</h3>

    <div class="card mt-3">
        <div class="card-body">
            <form class="row g-3">

                <div class="col-md-6">
                    <label for="inputState" class="form-label">Info Type</label> <br>
                    <label>
                        <input type="radio" value="message" name="type">
                    </label> Message <br>
                    <label>
                        <input type="radio" value="report" name="type">
                    </label> Report
                </div>

                <div class="col-md-6">
                    <label for="inputState" class="form-label">Send To</label>
                    <select id="inputState" class="form-select">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Info </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-danger"> <i class="fas fa-envelope"></i> Send</button>
                </div>
            </form>
        </div>
    </div>

@endsection
