@extends('layouts.master-dashboard-substitute')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user"></i> Profil Management Creator
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="/assets-admin/dist/img/user4-128x128.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">email@example.com</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                    <b>Aktif Sejak</b> <a class="pull-right">1 Januari 2021</a>
                    </li>
                    <li class="list-group-item">
                    <b>Status</b> <a class="pull-right">Active</a>
                    </li>
                    <li class="list-group-item">
                    <b>Jumlah Content</b> <a class="pull-right">10</a>
                    </li>
                </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Description</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                    <p class="text-muted">Malibu, California</p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#one" data-toggle="tab">About Profil</a></li>
                        <li><a href="#two" data-toggle="tab">About Social Media</a></li>
                        <li><a href="#three" data-toggle="tab">About Edit Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="one">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="name_creator"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama Creator<span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="name_creator" class="form-control input-sm" id="name_creator" placeholder="" required autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="login_email"><h6 style="color: black; font-weight:bold;font-size:13px;">Email Creator<span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="email" name="login_email" class="form-control input-sm" id="login_email" placeholder="" required autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="about_description"><h6 style="color: black; font-weight:bold;font-size:13px;">Description</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <textarea name="about_description" id="about_description" rows="5" style="width: 100%; padding: 10px; line-height: 1.5; border: 1px solid #ccc;"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="about_location"><h6 style="color: black; font-weight:bold;font-size:13px;">Location</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="about_location" class="form-control input-sm" id="about_location" placeholder="" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="about_notes"><h6 style="color: black; font-weight:bold;font-size:13px;">Notes</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <textarea name="about_notes" id="about_notes" rows="5" style="width: 100%; padding: 10px; line-height: 1.5; border: 1px solid #ccc;"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="foto_user"><h6 style="color: black; font-weight:bold;font-size:13px;">Foto User</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="file" name="foto_creator" class="form-control input-sm" id="foto_user" placeholder=""   >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="two">
                            {{-- Kosong --}}
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="three">
                            {{-- Kosong --}}
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
    
@endsection
