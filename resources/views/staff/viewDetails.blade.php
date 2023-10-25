@extends('layout.master')
@section('title', 'View details')

@section('content')

    <!-- read only student profile -->
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
                                <div class="card">
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

                            </div>
                            <!-- /.post -->

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="checkbox">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                            </div>
                        </form>
                        </div>
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