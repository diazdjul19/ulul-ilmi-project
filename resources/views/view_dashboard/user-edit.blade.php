@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user"></i>
            User Edit
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">User Management</a></li>
            <li class="active">User Edit</li>
        </ol>
    </section>

    <div class="row">
    
    </div>


    <section class="content">

        {{--Start Alert --}}
            @if ($message = Session::get('success_edit_profil'))
                <div class="box box-info box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Success Edit Profil</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{ $message }}
                    </div>
                    <!-- /.box-body -->
                </div>
            @endif

            @if ($message = Session::get('error_edit_profil'))
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Error Edit Profil</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{ $message }}
                    </div>
                    <!-- /.box-body -->
                </div>
            @endif
            

            @if ($message = Session::get('success_edit_password'))
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Success Edit Password</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{ $message }}
                    </div>
                    <!-- /.box-body -->
                </div>
            @endif

            @if ($message = Session::get('pass_copass_tidak_sama'))
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Error Edit Password</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{ $message }}
                    </div>
                    <!-- /.box-body -->
                </div>
            @endif

            @if ($message = Session::get('error_old_password'))
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-info-circle"></i>  Error Edit Password</h4>

                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{ $message }}
                    </div>
                    <!-- /.box-body -->
                </div>
            @endif

            
        {{-- End Alert --}}

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

            <form class="form-sample" action="{{route('user.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}

                    <!-- /.box-body -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Nama User</label>  
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }} {{$data->name}}" required autocomplete="name" placeholder="Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="l" for="exampleInputEmail1">Email User </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}  {{$data->email}}" required autocomplete="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Tempat Lahir</label> 
                                    <input type="text" name="tmp_lahir" class="form-control" id="exampleInputEmail1"  placeholder="Tempat Lahir" required value="{{$data->tmp_lahir}}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Tanggal Lahir </label>
                                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputEmail1"  placeholder="Tanggal lahir" required value="{{$data->tgl_lahir}}">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Jenis Kelamin</label>  
                                    <select class="form-control" name="gender" placeholder="Gender" required>
                                        <optgroup label="Gender Lama">
                                            <option  value="{{$data->gender}}">
                                                @if ($data->gender == 'L')
                                                    <span>Laki-laki</span>
                                                @elseif($data->gender == 'P')
                                                    <span>Perempuan</span>    
                                                @endif
                                            </option>
                                        </optgroup>  
                                        <optgroup label="Gender Baru">  
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="exampleInputEmail1">Nomer HP</label>
                                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1"  placeholder="Nomer Hand Phone" required value="{{$data->no_hp}}">
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-md-6">
                                @if (Auth::user()->level == 'A')
                                    <div class="form-group">                      
                                        <label class="" for="exampleInputEmail1">Level User</label>
                                        <select class="form-control" name="level" placeholder="Level" required>
                                            <optgroup label="Lavel Lama">
                                                <option  value="{{$data->level}}">
                                                    @if ($data->level == 'A')
                                                        <span>Admin</span>
                                                    @elseif($data->level == 'O')
                                                        <span>Operator</span>    
                                                    @endif
                                                </option>
                                            </optgroup>  
                                            <optgroup label="Level Baru">  
                                                <option value="A">Admin</option>
                                                <option value="O">Operator</option>
                                            </optgroup>
                                        </select>                                    
                                    </div>
                                @elseif(Auth::user()->level == 'O')
                                <div class="form-group">                      
                                        <label class="" for="exampleInputEmail1">Level User</label>
                                        <select class="form-control" name="level" placeholder="Level" disabled required>
                                            <optgroup label="Lavel Lama">
                                                <option  value="{{$data->level}}">
                                                    @if ($data->level == 'A')
                                                        <span>Admin</span>
                                                    @elseif($data->level == 'O')
                                                        <span>Operator</span>    
                                                    @endif
                                                </option>
                                            </optgroup>  
                                            <optgroup label="Level Baru">  
                                                <option value="A">Admin</option>
                                                <option value="O">Operator</option>
                                            </optgroup>
                                        </select>                                    
                                    </div>
                                @endif
                                
                            </div>

                            <div class="col-md-6">
                                    <label class="" for="exampleInputEmail1">Foto User</label>

                                <div class="form-group">                      
                                    @if($data->foto_user)
                                            <img src="{{url('/storage/user/'.$data->foto_user)}}" 
                                            width="120px" style="border-radius: 50%;">
                                    @endif
                                    
                                    <input type="file" name="foto_user" class="form-control" id="exampleInputEmail1"  placeholder="User Photo" value="{{$data->foto_user}}">
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


        
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-expeditedssl"></i> Form Edit Password</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>

        <form class="form-sample" action="{{route('edit-password-store-ao')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="l" for="exampleInputEmail1">Email User </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}  {{$data->email}}" required autocomplete="email" placeholder="Email" readonly>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="exampleInputEmail1">Password Lama</label> 
                                    <div class="input-group">
                                        <input type="password" name="old_password" class="form-control" id="oldpassword" placeholder="Password Lama"  required >
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
                                <label class="" for="exampleInputEmail1">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"  required >
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
                                <label class="" for="exampleInputEmail1">Password Confirmation</label> 
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirm Password"  required >
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
            
        </div>
        
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
