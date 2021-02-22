@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-tv"></i>
            Controller Landingpage Home
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">CT Home</a></li>
            <li class="active">CT Home</li>
        </ol>
    </section>

    <section class="content">
        {{-- Box For CT Home Default --}}
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Table Default Category</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>

            
            <div class="box-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Content</th>
                                <th>MD5 Unik Code</th>
                                <th class="text-center">CT Category</th>
                                <th class="text-center">Last Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_default as $d)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$d->ct_home_name}}</td>
                                    <td>{{$d->ct_home_uc}}</td>
                                    <td class="text-center">
                                        @if ($d->ct_home_category == "ct_default")
                                            <span class="label label-primary">Default</span>                                  
                                        @elseif($d->ct_home_category == "ct_custom")
                                            <span class="label label-info">Custom</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{date('d M Y', strtotime($d->updated_at))}}</td>
                                    <td class="text-center">
                                        <a href="{{route('ct-home-edit', $d->id)}}" class="btn btn-success btn-xs" style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                @if ($MD5_text_on_bgimg_cekcode == null)
                                    <td class="text-center">-</td>
                                    <td>Text On Background Image</td>
                                    <td><a href="{{route('ct-home-create-md5tob', $MD5_text_on_bgimg)}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$MD5_text_on_bgimg}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($MD5_text_sambutan_cekcode == null)
                                    <td class="text-center">-</td>
                                    <td>Text Sambutan</td>
                                    <td><a href="{{route('ct-home-create-md5ts', $MD5_text_sambutan)}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$MD5_text_sambutan}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($MD5_text_content_berita_cekcode == null)
                                    <td class="text-center">-</td>
                                    <td>Text Header Content Berita</td>
                                    <td><a href="{{route('ct-home-create-md5tcb', $MD5_text_content_berita)}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$MD5_text_content_berita}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            
                        </tbody>
                        
                        </tr>
                        </tfoot>
                    </table>
                </div>
                
            </div>
        
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <br>

        {{-- Box Form CT Home Custom --}}
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Table Custom Category</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('ct-home-create-custom')}}" class="btn btn-info btn-sm" style="margin-top: 10px;"><i class="fa fa-plus-circle"></i> Tambah</a>
                    </div>
                    <div class="col-md-c"></div>
                </div>
            </div>

            
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Content</th>
                                <th>MD5 Unik Code</th>
                                <th class="text-center">CT Category</th>
                                <th class="text-center">Last Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_custom as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->ct_home_name}}</td>
                                    <td>{{$d->ct_home_uc}}</td>
                                    <td class="text-center">
                                        @if ($d->ct_home_category == "ct_default")
                                            <span class="label label-primary">Default</span>                                  
                                        @elseif($d->ct_home_category == "ct_custom")
                                            <span class="label label-info">Custom</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{date('d M Y', strtotime($d->updated_at))}}</td>
                                    <td class="text-center">
                                        <a href="{{route('ct-home-edit', $d->id)}}" class="btn btn-success btn-xs" style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="{{route('ct-home-delete', $d->id)}}" id="btn-co-delete" class="btn btn-danger btn-xs"  style="margin: 3px;"><i class="fa fa-edit"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                        </tr>
                        </tfoot>
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
            $('#btn-co-delete').on('click',function(e){
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