@extends('layout.master')
@section('title','Notification')

@section('content')

    <h1>Notifications</h1>

    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button> --}}
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                <div class="row">
                  <div class="col-12">
                    <h4>Recent Activity</h4>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                          <span class="username">
                            <a href="#">Jonathan Burke Jr.</a>
                          </span>
                          <span class="description">Shared publicly - 7:45 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore.
                        </p>
                      </div>
  
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Sarah Ross</a>
                          </span>
                          <span class="description">Sent you a message - 3 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore.
                        </p>
                      </div>
  
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                          <span class="username">
                            <a href="#">Jonathan Burke Jr.</a>
                          </span>
                          <span class="description">Shared publicly - 5 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          Lorem ipsum represents a long-held tradition for designers,
                          typographers and the like. Some people hate it and argue for
                          its demise, but others ignore.
                        </p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>

@endsection