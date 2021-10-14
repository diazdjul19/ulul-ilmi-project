@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user"></i>
            Ct Creator Edit
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">Ct Creator</a></li>
            <li class="active">Ct Creator Edit</li>
        </ol>
    </section>

    <div class="row">
    
    </div>


    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user"></i> Form Edit Profil</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>

            <form class="form-sample" action="{{route('ct-creator-update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}

                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Nama Creator</label> 
                                    <input type="text" name="name_creator" class="form-control" id="exampleInputEmail1"  placeholder="" required value="{{$data->name_creator}}" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="l" for="exampleInputEmail1">Last Update </label>
                                    <input type="text" name="" class="form-control" id="exampleInputEmail1"  placeholder="" required value="{{date('d M Y', strtotime($data->updated_at))}}" readonly >
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Social Link Facebook</label> 
                                    <input type="text" name="social_link_facebook" class="form-control" id="exampleInputEmail1"  placeholder="" value="{{$data->social_link_facebook}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Social Link Instagram</label> 
                                    <input type="text" name="social_link_instagram" class="form-control" id="exampleInputEmail1"  placeholder="" value="{{$data->social_link_instagram}}" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Social Link Youtube</label> 
                                    <input type="text" name="social_link_youtube" class="form-control" id="exampleInputEmail1"  placeholder="" value="{{$data->social_link_youtube}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="" for="exampleInputEmail1">Foto Creator</label> 
                                <div class="form-group">
                                    @if($data->foto_creator)
                                            <img src="{{url('/storage/creator/'.$data->foto_creator)}}" 
                                            width="50px" style="border-radius: 50%;">
                                    @endif
                                    <input type="file" name="foto_creator" class="form-control" id="exampleInputEmail1"  placeholder="" value="{{$data->foto_creator}}" >
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Email Creator </label>
                                    <input type="text" name="login_email" class="form-control" id="exampleInputEmail1"  placeholder="" required value="{{$data->login_email}}" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Password Lama</label> 
                                    <div class="input-group">
                                        <input type="password" name="old_password" class="form-control" id="oldpassword" placeholder="Password Lama" >
                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye_old_pass" onclick="toggle_old_pass()"></i></div>
                                    </div>
                                    @if ($message = Session::get('error_old_password'))
                                        <strong style="color:red;">{{ $message }}</strong>
                                    @endif                               
                                </div>
                            </div>
                        </div>
                    

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" >
                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                                    </div>
                                    @if ($message = Session::get('non_new_pass'))
                                        <strong style="color:red;">{{ $message }}</strong>
                                    @endif
                                    @if ($message = Session::get('pass_copass_tidak_sama'))
                                        <strong style="color:red;">{{ $message }}</strong>
                                    @endif  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Password Baru Confirmation</label> 
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirm Password" >
                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye2" onclick="toggle2()"></i></div>
                                    </div>
                                    @if ($message = Session::get('pass_copass_tidak_sama'))
                                        <strong style="color:red;">{{ $message }}</strong>
                                    @endif                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
            
                    <!-- /.box-footer -->
                    <div class="box-footer">
                        
                        <a href="{{ URL::previous() }}" class="btn btn-warning" ><i class="fa  fa-arrow-circle-left"></i> Back</a>
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                    </div>
            </form>

            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
        
        <!-- /.box -->
    </section>
@endsection

@push('show-hide-password')
    <script>
        var state= false;

        function toggle_old_pass() {
            if (state) {
                document.getElementById(
                    "oldpassword").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye_old_pass").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "oldpassword").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye_old_pass").style.color='#5887ef';
                state = true;
            }
        }

        function toggle1() {
            if (state) {
                document.getElementById(
                    "password").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye1").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "password").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye1").style.color='#5887ef';
                state = true;
            }
        }

        function toggle2() {
            if (state) {
                document.getElementById(
                    "password-confirm").
                    setAttribute("type", "password");
                document.getElementById(
                    "eye2").style.color='#7a797e';
                state = false;
            }else{
                document.getElementById(
                    "password-confirm").
                    setAttribute("type", "text");
                document.getElementById(
                    "eye2").style.color='#5887ef';
                state = true;
            }
        }
    </script>
@endpush
