@extends('layout.master')
@section('title', 'View-Profile')

@section('content')

        <!-- read-only staff profile -->
            <section class="content">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="../../dist/img/user1-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">John J, Doe</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <p class="text-muted text-center">Office: <b>TT1</b></p>
                        
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <li class="text-muted">Kivule, Dar es salaam</li>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Expertise</strong>

                                <li class="text-muted">UI Design</li>
                                <li class="text-muted">Programming</li>                                
                                <li class="text-muted">Maintenance</li>
                                <li class="text-muted">Networking</li>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Current Classes</strong>

                            <li class="text-muted">OD22IT</li>
                            <li class="text-muted">OD22COE</li>
                            <li class="text-muted">OD22MFT</li>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2 bg-primary">
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                            <span class="username">
                                                <h3 class="profile-username">John J, Doe</h3>                                               
                                            </span>
                                            <span class="description">- A Lecturer</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Dedicated and passionate Computer Science Lecturer with a proven
                                            track record of effective teaching and a strong commitment to student 
                                            success.
                                        </p>

                                        <p><strong><i class="fas fa-building mr-1"></i> Department Identity</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                              <tr>
                                                <th>Role</th>
                                                <td>Head Of Section</td>
                                                <th></th>
                                              </tr>
                                              <tr>
                                                <th>Staff Code</th>
                                                <td>STFF01</td>
                                              </tr>
                                              <tr>
                                                <th>Section</th>
                                                <td>IPT</td>
                                              </tr>
                                            </thead>
                                          </table>

                                        <p><strong><i class="fas fa-cube mr-1"></i> Current Modules</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                <th>Module</th>
                                                <th>Class</th>
                                                <th>Pass Rate</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1.</td>
                                                <td>Computer Networking</td>
                                                <td>
                                                    <li class="text-muted">OD22IT</li>
                                                    <li class="text-muted">OD22COE</li>
                                                </td>
                                                <td><span class="badge bg-danger">55%</span></td>
                                              </tr>
                                              <tr>
                                                <td>2.</td>
                                                <td>Computer Programming</td>
                                                <td>
                                                    <li class="text-muted">OD22MFT</li>
                                                    <li class="text-muted">BENGCOE</li>
                                                </td>
                                                <td><span class="badge bg-warning">70%</span></td>
                                              </tr>
                                            </tbody>
                                          </table>

                                          <p><strong><i class="fas fa-building mr-1"></i> Contact Info</strong></p>

                                          <table class="table mb-5">
                                              <thead>
                                                <tr>
                                                  <th>Email</th>
                                                  <td>johndoe@sth.sth</td>
                                                  <th></th>
                                                </tr>
                                                <tr>
                                                  <th>Phone no.</th>
                                                  <td>0789 000 000</td>
                                                </tr>
                                                <tr>
                                                  <th>Address</th>
                                                  <td>xyz Main Street, 
                                                    Postal Code: 12345, 
                                                    House Number: 001</td>
                                                </tr>
                                              </thead>
                                            </table>
                                        

                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-danger">
                                                10 Feb. 2014
                                            </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-user bg-info"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                        <span class="bg-success">
                                            3 Jan. 2014
                                        </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                        <i class="fas fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            </div>
                                        </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
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




        <!-- read only student profile -->
            <section class="content">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="../../dist/img/user1-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">John J, Doe</h3>

                        <p class="text-muted text-center"><b>OD22IT</b></p>
                        
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Background</strong>

                                <li class="text-muted">Graduated at : <i>St Pio Secondary School</i> in <i>2021</i> </li>
                                <li class="text-muted">Studied from : <i>2018</i> to <i>2021</i></li>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <li class="text-muted">Kivule, Dar es salaam</li>

                            <hr>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2 bg-primary">
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                            <span class="username">
                                                <h3 class="profile-username">John J, Doe</h3>                                               
                                            </span>
                                            <span class="description">- Second Year Diploma</span>
                                        </div>

                                        <p><strong><i class="fas fa-building mr-1"></i> Departmental Info</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                                <tr>
                                                    <th>Registration no.</th>
                                                    <td>22022000000</td>
                                                </tr>
                                                <tr>
                                                    <th>Class</th>
                                                    <td>OD22IT</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td><span class="badge badge-success">Ongoing</span>,  <span class="badge badge-danger">Disco</span>,  <span class="badge badge-warning">Retake</span></td>
                                                </tr>
                                            </thead>
                                        </table>

                                        <p><strong><i class="fas fa-cube mr-1"></i> Current Scores</strong></p>

                                        <table class="table table-bordered table-hover mb-5">
                                            <thead>
                                              <tr>
                                                <th>Period</th>
                                                <th>GPA</th>
                                                <th>Attendance Rate</th>
                                                <th>Status</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr data-widget="expandable-table" aria-expanded="false">
                                                <td class="fw-bold">First Year</td>
                                                <td>0.123</td>
                                                <td class="text-center"><span class="badge badge-danger">10%</span></td>
                                                <td class="text-center"><span class="badge badge-danger">Fail</span></td>
                                              </tr>
                                              <tr class="expandable-body">
                                                <td colspan="5">
                                                    <div class="card"> 
                                                        <div class="card-header">
                                                            <strong><i class="far fa-calendar-alt mr-1"></i> Semister 1</strong>

                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Module</th>
                                                                    <th scope="col">Pass Mark</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Maintenance</td>
                                                                    <td class="text-center"><span class="badge badge-warning">40%</span></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Algebra</td>
                                                                    <td class="text-center"><span class="badge badge-success">80%</span></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                        </div>
                                                    </div>
                                                    <div class="card"> 
                                                        <div class="card-header">
                                                            <strong><i class="far fa-calendar-alt mr-1"></i> Semister 2</strong>

                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Module</th>
                                                                    <th scope="col">Pass Mark</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Networking</td>
                                                                    <td class="text-center"><span class="badge badge-warning">40%</span></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Programming</td>
                                                                    <td class="text-center"><span class="badge badge-success">80%</span></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                        </div>
                                                    </div>
                                                </td>
                                              </tr>

                                              <tr data-widget="expandable-table" aria-expanded="false">
                                                <td class="fw-bold">Second Year</td>
                                                <td>2.123</td>
                                                <td class="text-center"><span class="badge badge-warning">50%</span></td>
                                                <td class="text-center"><span class="badge badge-success">Pass</span></td>
                                              </tr>
                                              <tr class="expandable-body">
                                                <td colspan="5">
                                                    <div class="card"> 
                                                        <div class="card-header">
                                                            <strong><i class="far fa-calendar-alt mr-1"></i> Semister 1</strong>

                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Module</th>
                                                                    <th scope="col">Pass Mark</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Programming</td>
                                                                    <td class="text-center"><span class="badge badge-success">80%</span></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Networking</td>
                                                                    <td class="text-center"><span class="badge badge-warning">40%</span></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                        </div>
                                                    </div>
                                                    <div class="card"> 
                                                        <div class="card-header">
                                                            <strong><i class="far fa-calendar-alt mr-1"></i> Semister 2</strong>

                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Module</th>
                                                                    <th scope="col">Pass Mark</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Architecture</td>
                                                                    <td class="text-center"><span class="badge badge-danger">10%</span></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Event Driven Programming</td>
                                                                    <td class="text-center"><span class="badge badge-warning">50%</span></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                        </div>
                                                    </div>
                                                </td>
                                              </tr>

                                              <tr data-widget="expandable-table" aria-expanded="false">
                                                <td class="fw-bold">Third Year</td>
                                                <td>3.123</td>
                                                <td class="text-center"><span class="badge badge-success">80%</span></td>
                                                <td class="text-center"><span class="badge badge-success">Pass</span></td>
                                              </tr>
                                              <tr class="expandable-body">
                                                <td colspan="5">
                                                    <div class="card"> 
                                                        <div class="card-header">
                                                            <strong><i class="far fa-calendar-alt mr-1"></i> Semister 1</strong>

                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Module</th>
                                                                    <th scope="col">Pass Mark</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Mobile Application</td>
                                                                    <td class="text-center"><span class="badge badge-warning">49%</span></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Java</td>
                                                                    <td class="text-center"><span class="badge badge-success">80%</span></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                        </div>
                                                    </div>
                                                    <div class="card"> 
                                                        <div class="card-header">
                                                            <strong><i class="far fa-calendar-alt mr-1"></i> Semister 2</strong>

                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">Module</th>
                                                                    <th scope="col">Pass Mark</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Web Development</td>
                                                                    <td class="text-center"><span class="badge badge-success">90%</span></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Full-stack Development</td>
                                                                    <td class="text-center"><span class="badge badge-success">80%</span></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                        </div>
                                                    </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        <p><strong><i class="fas fa-phone mr-1"></i> Contact Info</strong></p>

                                        <table class="table mb-5">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <td>John John Doe</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>johndoe@sth.sth</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone no.</th>
                                                    <td>0789 000 000</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>xyz Main Street, 
                                                        Postal Code: 12345, 
                                                        House Number: 001
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        

                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-danger">
                                                10 Feb. 2014
                                            </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-user bg-info"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                        <span class="bg-success">
                                            3 Jan. 2014
                                        </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                        <i class="fas fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            <img src="https://placehold.it/150x100" alt="...">
                                            </div>
                                        </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
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