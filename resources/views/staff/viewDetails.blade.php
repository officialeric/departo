@extends('layout.master')
@section('title', 'View details')

@section('content')

    <!-- read only ipt details -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header p-2 bg-secondary">
                    <span class="">
                        <h1 class="fw-bolder"><i class="fas fa-clipboard-check mr-1"></i> IPT SECTION</h1>
                    </span>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">

                                <p><strong><i class="fas fa-building mr-1"></i> Basic Info</strong></p>

                                <table class="table mb-5">
                                    <thead>
                                        <tr>
                                            <th>Head Of Section</th>
                                            <td><a href="/view-staff-profile" class="text-muted" style="text-decoration: none">John Doe</a></td>
                                        </tr>
                                        <tr>
                                            <th>Section Code</th>
                                            <td>ST1</td>
                                        </tr>
                                        <tr>
                                            <th>Total Staffs</th>
                                            <td>10</td>
                                        </tr>
                                    </thead>
                                </table>

                                <p><strong><i class="fas fa-cube mr-1"></i> Current Tasks</strong></p>

                                <table class="table table-bordered table-hover mb-5">
                                    <thead>
                                      <tr>
                                        <th>Task</th>
                                        <th>Assigned At</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr data-widget="expandable-table" aria-expanded="false">
                                        <td class="fw-bold">Collect Log Books</td>
                                        <td>23-10-2023</td>
                                        <td class="text-center"><span class="badge badge-warning">Ongoing</span></td>
                                      </tr>
                                      <tr class="expandable-body">
                                        <td colspan="5">
                                            <div class="card">
                                                <p><strong><i class="fas fa-info-circle mr-1"></i> Info</strong></p>
                                                <div class="card-header mb-3">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>Assigned By</th>
                                                                <td><a href="/view-staff-profile" class="text-muted" style="text-decoration: none">John Doe</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Deadline</th>
                                                                <td>---</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Progress</th>
                                                                <td class="project_progress">
                                                                    <div class="progress progress-sm">
                                                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                                                        </div>
                                                                    </div>
                                                                    <small>
                                                                        57% Complete
                                                                    </small>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <strong><i class="fas fa-info-circle mr-1"></i> Description</strong>
                                                <div class="card-body">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Minus nesciunt autem, accusamus repudiandae vero enim
                                                        earum porro cupiditate itaque commodi molestias in
                                                        corporis! Veniam atque sit minima ut vitae ullam.
                                                    </p>
                                                </div>
                                            </div>

                                    </tbody>
                                  </table>

                                <p><strong><i class="fas fa-users mr-1"></i> Staffs In Section</strong></p>
                                <div class="card mb-5">
                                    <div class="card-header">
                                      <h3 class="card-title"></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <table id="details" class="table table-bordered table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Joined</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>183</td>
                                            <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">John Doe</a></td>
                                            <td>11-7-2014</td>
                                          </tr>
                                          <tr>
                                            <td>219</td>
                                            <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Alexander Pierce</a></td>
                                            <td>11-7-2014</td>
                                          </tr>
                                          <tr>
                                            <td>657</td>
                                            <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Bob Doe</a></td>
                                            <td>11-7-2014</td>
                                          </tr>
                                          <tr>
                                            <td>175</td>
                                            <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Mike Doe</a></td>
                                            <td>11-7-2014</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <p><strong><i class="fas fa-envelope mr-1"></i> Message</strong></p>

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="...good"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-0 col-sm-10">
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-envelope mr-1"></i>Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- /.post -->

                        </div>
                        <!-- /.tab-pane -->




                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


    <!--read only task details-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2 bg-secondary">
                    <span class="">
                        <h1 class="fw-bolder"><i class="fas fa-clipboard-check mr-1"></i> TASK TITLE</h1>
                    </span>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">

                                        <p><strong><i class="fas fa-building mr-1"></i> Basic Info</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                            <tr>
                                                <th>Assigned To</th>
                                                <td><a href="/view-staff-profile" class="text-muted" style="text-decoration: none">John Doe</a></td>
                                            </tr>
                                            <tr>
                                                <th>Assigned At</th>
                                                <td>30.10.2023</td>
                                            </tr>
                                            <tr>
                                                <th>Total Members in Task</th>
                                                <td>10</td>
                                            </tr>
                                            </thead>
                                        </table>

                                        <p><strong><i class="fas fa-users mr-1"></i> Members In Task</strong></p>
                                        <div class="card mb-5">
                                            <div class="card-header">
                                                <h3 class="card-title"></h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="details" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">John Doe</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>219</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Alexander Pierce</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>657</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Bob Doe</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>175</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Mike Doe</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>

                                        <strong><i class="fas fa-info-circle mr-1"></i> Description</strong>
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Minus nesciunt autem, accusamus repudiandae vero enim
                                                    earum porro cupiditate itaque commodi molestias in
                                                    corporis! Veniam atque sit minima ut vitae ullam.
                                                </p>
                                            </div>
                                        </div>

                                        <p><strong><i class="fas fa-envelope mr-1"></i> Message</strong></p>

                                        <div class="tab-pane" id="settings">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputExperience" placeholder="...good"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-0 col-sm-10">
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-envelope mr-1"></i>Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>



    <!--read only role details-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2 bg-secondary">
                    <span class="">
                        <h1 class="fw-bolder"><i class="fas fa-clipboard-check mr-1"></i> ROLE: ADMIN</h1>
                    </span>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">

                                        <p><strong><i class="fas fa-building mr-1"></i> Basic Info</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                            <tr>
                                                <th>Members With Role</th>
                                                <td><a href="/view-staff-profile" class="text-muted" style="text-decoration: none">1</a></td>
                                            </tr>
                                            </thead>
                                        </table>

                                        <strong><i class="fas fa-info-circle mr-1"></i> Role Description</strong>
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Minus nesciunt autem, accusamus repudiandae vero enim
                                                    earum porro cupiditate itaque commodi molestias in
                                                    corporis! Veniam atque sit minima ut vitae ullam.
                                                </p>
                                            </div>
                                        </div>

                                        <p><strong><i class="fas fa-users mr-1"></i> List of Members</strong></p>
                                        <div class="card mb-5">
                                            <div class="card-header">
                                                <h3 class="card-title"></h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="details" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">John Doe</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>

                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>



    <!-- read only class details -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2 bg-secondary">
                    <span class="">
                        <h1 class="fw-bolder"><i class="fas fa-clipboard-check mr-1"></i> OD22IT</h1>
                    </span>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">

                                        <p><strong><i class="fas fa-building mr-1"></i> Basic Info</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                            <tr>
                                                <th>Total Members</th>
                                                <td><a href="/view-staff-profile" class="text-muted" style="text-decoration: none">80</a></td>
                                            </tr>
                                            <tr>
                                                <th>Class Representative</th>
                                                <td><a href="/view-student-profile" style="text-decoration: none">John Doe</a></td>
                                            </tr>
                                            <tr>
                                                <th>Pass Rate</th>
                                                <td> <span class="badge badge-success">70%</span></td>
                                            </tr>
                                            </thead>
                                        </table>

                                        <p><strong><i class="fas fa-cube mr-1"></i> Current Modules</strong></p>

                                        <div class="card mb-5">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="details" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Module Code</th>
                                                        <th>Module Name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td><a href="#" style="text-decoration: none" class="text-muted">Networking</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>999</td>
                                                        <td><a href="#" style="text-decoration: none" class="text-muted">Programming</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>000</td>
                                                        <td><a href="#" style="text-decoration: none" class="text-muted">Mathematics</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>

                                        <p><strong><i class="fas fa-users mr-1"></i> Staffs With Class</strong></p>
                                        <div class="card mb-5">
                                            <div class="card-body">
                                                <table id="details" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Module</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">John Doe</a></td>
                                                            <td>Networking</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Alexander Pierce</a></td>
                                                            <td>Programming</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>

                                        <p><strong><i class="fas fa-users mr-1"></i> Members of Class</strong></p>
                                        <div class="card mb-5">
                                            <div class="card-body">
                                                <table id="details" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Registration no.</th>
                                                            <th>Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>220229111111</td>
                                                            <td><a href="/view-student-profile" style="text-decoration: none" class="text-muted">John Doe</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>220229000000</td>
                                                            <td><a href="/view-student-profile" style="text-decoration: none" class="text-muted">Alexander Pierce</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>

                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->




                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


    <!-- read only module details -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2 bg-secondary">
                    <span class="">
                        <h1 class="fw-bolder"><i class="fas fa-clipboard-check mr-1"></i> MODULE: NETWORKING</h1>
                    </span>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">

                                        <p><strong><i class="fas fa-building mr-1"></i> Basic Info</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                            <tr>
                                                <th>Module code</th>
                                                <td>COT 04112</td>
                                            </tr>
                                            <tr>
                                                <th>Classes With Module</th>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <th>Staffs Teaching the Module</th>
                                                <td>1</td>
                                            </tr>
                                            </thead>
                                        </table>

                                        <p><strong><i class="fas fa-cube mr-1"></i> List of Classes</strong></p>

                                        <table class="table table-bordered table-hover mb-5">
                                            <thead>
                                                <tr>
                                                    <th>Class</th>
                                                    <th>Total Members</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td class="fw-bold">OD22IT</td>
                                                    <td>80</td>
                                                    <td class="text-center"><span class="badge badge-warning">Ongoing</span></td>
                                                </tr>
                                                <tr class="expandable-body">
                                                    <td colspan="5">
                                                        <div class="card">
                                                            <p><strong><i class="fas fa-info-circle mr-1"></i> Info</strong></p>
                                                            <div class="card-header mb-3">
                                                                <table class="table table-borderless">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Lectured By</th>
                                                                            <td><a href="/view-staff-profile" class="text-muted" style="text-decoration: none">John Doe</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Classes Attended</th>
                                                                            <td>---</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Supplimentaries</th>
                                                                            <td>---</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Pass Rate</th>
                                                                            <td>---</td>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p><strong><i class="fas fa-users mr-1"></i> List of Staffs Teaching Module</strong></p>
                                        <div class="card mb-5">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="details" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">John Doe</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>219</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Alexander Pierce</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>657</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Bob Doe</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>175</td>
                                                        <td><a href="/view-staff-profile" style="text-decoration: none" class="text-muted">Mike Doe</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
