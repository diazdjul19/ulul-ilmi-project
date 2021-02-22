@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-university"></i>
            Controller Pendidikan <br>
            <small style="margin-left: 30px;">Madrasah Aliyah</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">CT Pendidikan</a></li>
            <li class="active">CT Pendidikan MA</li>
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
                                <th class="text-center">Pendidikan</th>
                                <th class="text-center">CT Category</th>
                                <th class="text-center">Last Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_default as $d)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$d->ct_pdd_name}}</td>
                                    <td>{{$d->ct_pdd_uc}}</td>
                                    <td class="text-center">{{$d->ct_pdd_jp}}</td>
                                    <td class="text-center">
                                        @if ($d->ct_pdd_category == "ct_default")
                                            <span class="label label-primary">Default</span>                                  
                                        @elseif($d->ct_pdd_category == "ct_custom")
                                            <span class="label label-info">Custom</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{date('d M Y', strtotime($d->updated_at))}}</td>
                                    <td class="text-center">
                                        <a href="{{route('ct-pdd-ma-edit', $d->id)}}" class="btn btn-success btn-xs" style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                @if ($cekkode_logo_ma == null)
                                    <td class="text-center">-</td>
                                    <td>Logo MA</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_logo_ma}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_kata_pengantar == null)
                                    <td class="text-center">-</td>
                                    <td>Kata Pengantar</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_kata_pengantar}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_visi == null)
                                    <td class="text-center">-</td>
                                    <td>VISI MA</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_visi}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_misi == null)
                                    <td class="text-center">-</td>
                                    <td>MISI MA</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_misi}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_infolain_01 == null)
                                    <td class="text-center">-</td>
                                    <td>Info Lain 01</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_infolain_01}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_infolain_02 == null)
                                    <td class="text-center">-</td>
                                    <td>Info Lain 02</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_infolain_02}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_infolain_03 == null)
                                    <td class="text-center">-</td>
                                    <td>Info Lain 03</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_infolain_03}}</a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                @endif
                            </tr>

                            <tr>
                                @if ($cekkode_infolain_04 == null)
                                    <td class="text-center">-</td>
                                    <td>Info Lain 04</td>
                                    <td><a href="{{route('ct-pdd-ma-create-default')}}" data-toggle="tooltip" title="Klik ini untuk mengisi data pada category default." data-placement="bottom">{{$md5_infolain_04}}</a></td>
                                    <td class="text-center">-</td>
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
                        <a href="{{route('ct-pdd-ma-create-custom')}}" class="btn btn-info btn-sm" style="margin-top: 10px;"><i class="fa fa-plus-circle"></i> Tambah</a>
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
                                <th class="text-center">Pendidikan</th>
                                <th class="text-center">CT Category</th>
                                <th class="text-center">Last Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_custom as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->ct_pdd_name}}</td>
                                    <td>{{$d->ct_pdd_uc}}</td>
                                    <td class="text-center">{{$d->ct_pdd_jp}}</td>
                                    <td class="text-center">
                                        @if ($d->ct_pdd_category == "ct_default")
                                            <span class="label label-primary">Default</span>                                  
                                        @elseif($d->ct_pdd_category == "ct_custom")
                                            <span class="label label-info">Custom</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{date('d M Y', strtotime($d->updated_at))}}</td>
                                    <td class="text-center">
                                        <a href="{{route('ct-pdd-ma-edit', $d->id)}}" class="btn btn-success btn-xs" style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="{{route('ct-pdd-delete', $d->id)}}" id="btn-co-delete" class="btn btn-danger btn-xs"  style="margin: 3px;"><i class="fa fa-edit"></i> Delete</a>
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