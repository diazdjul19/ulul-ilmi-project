@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-question-circle"></i>
            Controller Informasi Pendaftaran <br>
            <small style="margin-left: 30px;">Informasi Pendaftaran</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">CT Informasi PPDB</a></li>
            <li class="active">CT Informasi Pendaftaran</li>
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
                        <a href="{{route('ct-info-ppdb.create')}}" class="btn btn-info btn-sm" style="margin-top: 10px;"><i class="fa fa-plus-circle"></i> Tambah</a>
                    </div>
                    <div class="col-md-c"></div>
                </div>                
            </div>

            
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Name</th>
                                <th>MD5 UC</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">File Document</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->name_section}}</td>
                                    <td>{{$d->md5_uc}}</td>
                                    <td class="text-center">
                                        @if ($d->status == "pending")
                                            <a href="{{route('ct-info-ppdb.active', $d->id)}}" id="active-button" class="label label-warning" style="font-size: 12px;" data-toggle="tooltip" title="Activate now" data-placement="top"><i class="fa fa-clock-o"></i> Pending</a>
                                        @elseif ($d->status == "active")
                                            <a  href="{{route('ct-info-ppdb.not-active', $d->id)}}" id="non-active-button" class="label label-info" style="font-size: 12px;"  data-toggle="tooltip" title="Click to deactivate" data-placement="top"><i class="fa fa-check-square-o"></i> Aktif</a>
                                        @elseif ($d->status == "not_active")
                                            <a href="{{route('ct-info-ppdb.active', $d->id)}}" id="active-button" class="label label-danger" style="font-size: 12px;" data-toggle="tooltip" title="Click to activate" data-placement="top"><i class="fa fa-remove"></i> Tidak Aktif</a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($d->file_information == true)
                                            <a  href="{{url('/storage/files_information_ppdb/'.$d->file_information)}}" target="_blank" id="" class="label label-info" style="font-size: 12px;"  data-toggle="tooltip" title="Click to dowanload" data-placement="top"><i class="fa fa-cloud-download"></i> Download</a>
                                        @elseif($d->file_information != true)
                                            <span>File Information Tidak Ada.</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('ct-info-ppdb.edit', $d->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="{{route('ct-info-ppdb.destroy', $d->id)}}" class="btn btn-danger btn-xs btn-co-delete"><i class="fa fa-trash"></i> Hapus</a>
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
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endpush

@push('confirm-alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        // Start Confirm Select Delete Using SweetAlert2
            $('.btn-co-delete').on('click',function(e){
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
