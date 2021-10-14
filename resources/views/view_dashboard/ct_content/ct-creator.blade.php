@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-paint-brush"></i>
            CT Creator
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">CT Content</a></li>
            <li class="active">CT Creator</li>
        </ol>
    </section>

    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Table Creator</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;" data-toggle="modal" data-target="#modal-create"><i class="fa fa-paint-brush"></i> Tambah</button>
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
                                <h4 class="modal-title">Tambah Creator</h4>
                            </div>

                            <form action="{{route('ct-creator-store')}}" method="post" enctype="multipart/form-data">
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
                                                <label class="col-md-4 col-form-label" for=""><h6 style="color: black; font-weight:bold;font-size:13px;">Security <span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror input-sm" id="password" placeholder="Password"  required >
                                                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
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
                                                <label class="col-md-4 col-form-label" for="social_link_facebook"><h6 style="color: black; font-weight:bold;font-size:13px;">Social Link Facebook</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="social_link_facebook" class="form-control input-sm" id="social_link_facebook" placeholder="" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="social_link_instagram"><h6 style="color: black; font-weight:bold;font-size:13px;">Social Link instagram</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="social_link_instagram" class="form-control input-sm" id="social_link_instagram" placeholder="" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-4 col-form-label" for="social_link_youtube"><h6 style="color: black; font-weight:bold;font-size:13px;">Social Link Youtube</h6></label>
                                                
                                                <div class="col-md-8">
                                                    <input type="text" name="social_link_youtube" class="form-control input-sm" id="social_link_youtube" placeholder="" autocomplete="off">
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
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                {{-- End Modal Create --}}
                
                
            </div>

            
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Img</th>
                                <th>Nama Creator</th>
                                <th class="text-center">Email Creator</th>
                                <th class="text-center">Social Media</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td class="text-center" style="padding-top: 15px;">{{$loop->iteration}}</td>
                                    @if ($d->foto_creator == true)
                                        <td style="padding-left: 20px;"><a href="{{url('/storage/creator/'.$d->foto_creator)}}" target="_blank" rel="noopener noreferrer"><img class="direct-chat-img" src="{{url('/storage/creator/'.$d->foto_creator)}}" alt="message user image"></a></td>
                                    @else
                                        <td style="padding-left: 20px;"><a href="/assets-ululilmi/nopicture.png" target="_blank" rel="noopener noreferrer"><img class="direct-chat-img" src="/assets-ululilmi/nopicture.png" alt="message user image"></a></td>
                                    @endif
                                    <td style="padding-top: 15px;">{{$d->name_creator}}</td>
                                    <td style="padding-top: 15px;" class="text-center">{{$d->login_email}}</td>
                                    <td style="padding-top: 15px;" class="text-center">
                                        @if ($d->social_link_facebook == true)
                                            <a href="{{$d->social_link_facebook}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Lihat Social Link" data-placement="bottom" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i> </a>
                                        @endif

                                        @if ($d->social_link_instagram == true)
                                            <a href="{{$d->social_link_instagram}}" class="btn bg-maroon btn-xs" data-toggle="tooltip" title="Lihat Social Link" data-placement="bottom" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i> </a>
                                        @endif

                                        @if ($d->social_link_youtube == true)
                                            <a href="{{$d->social_link_youtube}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Lihat Social Link" data-placement="bottom" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-play"></i> </a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($d->status == "pending")
                                            <a href="{{route('ct-creator.active', $d->id)}}" id="active-button" class="label label-warning" style="font-size: 12px;" data-toggle="tooltip" title="Activate to agree" data-placement="top"><i class="fa fa-clock-o"></i> Pending</a>
                                        @elseif ($d->status == "active")
                                            <a  href="{{route('ct-creator.not-active', $d->id)}}" id="non-active-button" class="label label-info" style="font-size: 12px;"  data-toggle="tooltip" title="Click to deactivate" data-placement="top"><i class="fa fa-check-square-o"></i> Aktif</a>
                                        @elseif ($d->status == "not_active")
                                            <a href="{{route('ct-creator.active', $d->id)}}" id="active-button" class="label label-danger" style="font-size: 12px;" data-toggle="tooltip" title="Click to activate" data-placement="top"><i class="fa fa-remove"></i> Tidak Aktif</a>
                                        @endif
                                    </td>
                                    <td style="padding-top: 15px;" class="text-center">
                                        <a href="{{route('ct-creator-edit', $d->id)}}" id="" class="btn btn-success btn-xs"  style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="{{route('ct-creator-delete', $d->id)}}" id="" class="delete-alert btn btn-danger btn-xs"  style="margin: 3px;"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
@endsection


@push('datatable')
    <script>
        $(document).ready( function () {

            var table = $(function () {
                $('#example1').DataTable()
            });

        });
        
    </script>
@endpush


@push('confirm-alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        // Start Confirm Select Delete Using SweetAlert2
            $('.delete-alert').on('click',function(e){
                e.preventDefault();
                const url = $(this).attr('href');
                // var id = $(this).data('id');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda akan menghapus data ini!",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                        'Success!',
                        'Data berhasil di hapus.',
                        'success'
                        )
                        window.location.href = url;
                    }
                });
                
            });
        // End Confirm Select Delete Using SweetAlert2
    </script>
@endpush

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