@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user"></i>
            User Management
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">User Management</li>
        </ol>
    </section>

    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Table User Management</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {{-- <a href="" class="btn btn-info btn-sm" style="margin-top: 10px;"><i class="fa fa-user-plus"></i> Tambah</a> --}}
                        <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;" data-toggle="modal" data-target="#modal-create"><i class="fa fa-user-plus"></i> Tambah</button>
                    </div>
                    <div class="col-md-c"></div>
                </div>

                {{-- Start Modal Create --}}
                <div class="modal fade" id="modal-create">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tambah User</h4>
                            </div>

                            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for="name"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama <span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-10">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert" style="color: red;">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for="email"><h6 style="color: black; font-weight:bold;font-size:13px;">Email <span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-10">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert" style="color: red;">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for="no_hp"><h6 style="color: black; font-weight:bold;font-size:13px;">No Hp</h6></label>
                                                
                                                <div class="col-md-10">
                                                    <input type="text" name="no_hp" class="form-control input-sm" id="no_hp" placeholder=""  >
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for=""><h6 style="color: black; font-weight:bold;font-size:13px;">TTL</h6></label>
                                                
                                                <div class="col-md-5">
                                                    <input type="text" name="tmp_lahir" class="form-control input-sm" id="tmp_lahir" placeholder="Tempat Lahir"   >
                                                </div>
                                                {{-- <div class="col-md-1"></div> --}}
                                                <div class="col-md-5">
                                                    <input type="date" name="tgl_lahir" class="form-control input-sm" id="tgl_lahir" placeholder=""   >
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for="gender"><h6 style="color: black; font-weight:bold;font-size:13px;">Gender</h6></label>
                                                
                                                <div class="col-md-10">
                                                    <select class="form-control" name="gender" id="gender" >
                                                        <optgroup label="Pilih Gander" >
                                                            <option value="disabled" disabled selected>Pilih Gender</option>
                                                            <option value="L">Laki - Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for="foto_user"><h6 style="color: black; font-weight:bold;font-size:13px;">Foto User</h6></label>
                                                
                                                <div class="col-md-10">
                                                    <input type="file" name="foto_user" class="form-control input-sm" id="foto_user" placeholder=""   >
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for=""><h6 style="color: black; font-weight:bold;font-size:13px;">Security <span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror input-sm" id="password" placeholder="Password"  required >
                                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input type="password" name="password_confirmation" class="form-control input-sm" id="password-confirm" placeholder="Confirm Password"  required >
                                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye2" onclick="toggle2()"></i></div>
                                                    </div>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert" style="color: red; margin-left:15px;">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-2 col-form-label" for="gender"><h6 style="color: black; font-weight:bold;font-size:13px;">Level <span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-10">
                                                    <select class="form-control" name="level" id="level" required>
                                                        <optgroup label="Pilih Level" >
                                                            <option value="disabled" disabled selected>Pilih Level</option>
                                                            <option value="A">Admin</option>
                                                            <option value="O">Operator</option>
                                                        </optgroup>
                                                    </select>
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
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                {{-- End Modal Create --}}
            </div>

            <form action="{{route('select-delete-user')}}" method="post" >
                @csrf
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th class="text-center">No HP</th>
                                    <th class="text-center">Level</th>
                                    <th class="text-center">Action</th>
                                    <th class="text-center">
                                        <div>
                                            <button class="btn btn-danger btn-xs" style="margin-left: 22px;" id="btn-co-delete" name="select_delete[]" type="submit">
                                                <i class="icon ion-trash-b" ></i>
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->email}}</td>
                                        <td class="text-center">
                                            @if ($d->no_hp == true)
                                                {{$d->no_hp}}
                                            @elseif($d->no_hp == false)
                                                <span>Kosong !</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($d->level == "A")
                                                <span class="label label-primary">Admin</span>                                  
                                            @elseif($d->level == "O")
                                                <span class="label label-info">Operator</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{-- Admin --}}
                                            @if ($d->level == 'A')
                                                @if ($d->status == 'not_active')
                                                    <a href="{{route('user.active', $d->id)}}" id="" class="label label-warning" style="font-size: 12px;"  data-toggle="tooltip" title="Activate now" data-placement="top" ><i class="fa fa-clock-o"></i> Belum Aktif</a>
                                                @elseif($d->status == 'active')    
                                                    <span class="label label-primary" style="font-size: 12px;"><i class="fa fa-check-square-o"></i> Admin Aktif</span>
                                                @endif

                                            {{-- Operator --}}
                                            @elseif($d->level == 'O')
                                                @if ($d->status == 'not_active')
                                                    <a href="{{route('user.active', $d->id)}}" id="" class="label label-warning" style="font-size: 12px;" data-toggle="tooltip" title="Activate now" data-placement="top"><i class="fa fa-clock-o"></i> Belum Aktif</a>
                                                @elseif($d->status == 'active')
                                                    <a  href="{{route('user.not-active', $d->id)}}" id="" class="label label-info" style="font-size: 12px;"  data-toggle="tooltip" title="Turn it off now" data-placement="top"><i class="fa fa-check-square-o"></i> User Aktif</a>
                                                @endif 
                                            @endif  

                                            <a href="{{route('user.show', $d->id)}}" class="btn bg-purple btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
                                            <a href="{{route('user.edit', $d->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="select_delete[]" value="{{$d->id}}"></td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                            
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                </div>
            </form>
            
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
@endsection


@push('datatable')
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endpush

@push('show-hide-password')
    <script>
        var state= false;
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

@push('confirm-alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        // Start Confirm Select Delete Using SweetAlert2
            $('#btn-co-delete').on('click',function(e){
                e.preventDefault();

                var form = $(this).parents('form');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda tidak akan bisa mengembalikan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                        'Success!',
                        'Data Berhasil Di Hapus.',
                        'success'
                        )
                        form.submit();
                    } else {
                        Swal.fire(
                            'Cancelled!',
                            'Our imaginary file is safe :).',
                            'error'
                        )
                    } 
                });
            });
        // End Confirm Select Delete Using SweetAlert2
    </script>
@endpush