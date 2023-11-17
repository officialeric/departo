
@extends('layout.master')

@section('title', 'Dashboard')

@section('content')
 <!-- Preloader -->
 <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/departo.png" alt="Departo-Logo" height="60" width="60">

</div>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col --> --}}   
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalStaffs }}</h3>

                <p>Entire Staffs</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="/view-staff" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalStudents }}
                    {{-- <sup style="font-size: 20px">%</sup> --}}
                </h3>

                <p>Aggregate Students</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <a href="/view-student" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $totalClasses }}</h3>

                <p>Complete Classes</p>
            </div>
            <div class="icon">
                <i class="fab fa-odnoklassniki-square"></i>
            </div>
            <a href="/view-class" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $totalModules }}</h3>

                <p>Total Modules</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="/view-module" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
         


        </div>
        <!-- /.row (main row) -->

    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection