@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-dashboard"></i>
            Dashboard
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Example</span>
                <span class="info-box-number">0</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                    <span class="progress-description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Example</span>
                <span class="info-box-number">0</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                    <span class="progress-description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Example</span>
                <span class="info-box-number">0</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                    <span class="progress-description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Example</span>
                <span class="info-box-number">0</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                    <span class="progress-description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <br>

        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                    @if (Auth::user()->foto_user == true)
                        <img class="profile-user-img img-responsive img-circle" src="{{url('/storage/user/'.Auth::user()->foto_user)}}" alt="User profile picture">
                    @else
                        <img src="/assets-ululilmi/nopicture2.png" class="profile-user-img img-responsive img-circle" alt="User profile picture">
                    @endif

                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                    <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                        <b>Hak Akses</b> <a class="pull-right">
                            @if (Auth::user()->level == "A")
                                <span class="label label-primary" style="">Admin</span>                                  
                            @elseif(Auth::user()->level == "O")
                                <span class="label label-info" style="">Operator</span>
                            @endif
                        </a>
                        </li>
                    </ul>

                    <a href="{{route('user.show', Auth::user()->id)}}" class="btn btn-primary btn-block"><b>View Detail</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-9">
                <!-- MAP & BOX PANE -->
                <div class="box box-success">
                    <div class="box-header with-border">
                    <h3 class="box-title">Google Maps Location</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card bd-0 shadow-base" style="padding: 15px;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31722.34427502119!2d106.88128878884821!3d-6.356101553589016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5562236d87%3A0xfde09a708a94edf4!2sYayasan%20Pondok%20Pesantren%20Yatim%20Piatu%20Ulul%20llmi!5e0!3m2!1sen!2sid!4v1611473130999!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                                    </div><!-- card -->

                                    <div class="input-group input-group-sm" style="padding:15px;">
                                        <input type="text" class="form-control" placeholder='Size recommendation : width="100%" height="450"'>
                                            <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat">Start Iframe!</button>
                                            </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

