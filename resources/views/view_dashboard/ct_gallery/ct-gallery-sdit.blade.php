@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-image"></i>
            CT Gallery SDIT
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">CT Gallery</a></li>
            <li class="active">CT Gallery SDIT</li>
        </ol>
    </section>

    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Table Gallery SDIT</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info btn-sm" style="margin-top: 10px;" data-toggle="modal" data-target="#modal-create"><i class="fa fa-image"></i> Tambah</button>
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
                                <h4 class="modal-title">Tambah Image</h4>
                            </div>

                            <form action="{{route('ct-gallery-store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-3 col-form-label" for="name_image"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama Image<span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-9">
                                                    <input type="text" name="name_image" class="form-control input-sm" id="name_image" placeholder="" required autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-3 col-form-label" for="category_image"><h6 style="color: black; font-weight:bold;font-size:13px;">Category Image<span style="color: red;">*</span></h6></label>
                                                
                                                <div class="col-md-9">
                                                    <select class="form-control" name="category_image" id="category_image" required>
                                                        <optgroup label="Pilih Category" >
                                                            <option value="disabled" disabled>Pilih Category</option>
                                                            <option value="sdit_image" selected>SDIT Image</option>
                                                            {{-- <option value="mts_image">MTS Image</option>
                                                            <option value="ma_image">MA Image</option>
                                                            <option value="mdt_image">MDT Image</option>
                                                            <option value="other_image">OTHER Image</option> --}}
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-3 col-form-label" for="image"><h6 style="color: black; font-weight:bold;font-size:13px;">Image</h6></label>
                                                
                                                <div class="col-md-9">
                                                    <input type="file" name="image" class="form-control input-sm" id="image" placeholder="" autocomplete="off">
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

                <!-- Start Edit Model -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Image</h4>
                        </div>
                        
                        <form action="/ct-gallery-update" method="POST" id="editForm" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-3 col-form-label" for="name_image"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama Image<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-9">
                                                <input type="text" name="name_image" class="form-control input-sm" id="name_image_edit" placeholder="" required autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-3 col-form-label" for="category_image"><h6 style="color: black; font-weight:bold;font-size:13px;">Category Image<span style="color: red;">*</span></h6></label>
                                            
                                            <div class="col-md-4">
                                                <input type="text" name="" class="form-control input-sm" id="category_image_edit" placeholder="" required autocomplete="off" readonly>
                                            </div>
                                            <div class="col-md-5">
                                                <select class="form-control" name="category_image" id="" required>
                                                    <option value="disabled" disabled>Pilih Category</option>
                                                    <option value="sdit_image" selected>SDIT Image</option>
                                                    <option value="mts_image">MTS Image</option>
                                                    <option value="ma_image">MA Image</option>
                                                    <option value="mdt_image">MDT Image</option>
                                                    <option value="other_image">OTHER Image</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin:0px;">
                                            <label class="col-md-3 col-form-label" for="image"><h6 style="color: black; font-weight:bold;font-size:13px;">Foto / Image</h6></label>
                                            
                                            <div class="col-md-4">
                                                <input type="text" name="" class="form-control input-sm" id="image_edit" placeholder="" autocomplete="off" readonly>
                                            </div>

                                            <div class="col-md-5">
                                                <input type="file" name="image" class="form-control input-sm" id="" placeholder=""   >
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
                    </div>
                </div>
                {{-- End Edit MOdel --}}
            </div>

            
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="display:none;">ID</th>
                                <th>No</th>
                                <th>Nama Image</th>
                                <th class="text-center">Category Image</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Last Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td style="display:none;">{{$d->id}}</td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->name_image}}</td>
                                    <td class="text-center">
                                        @if ($d->category_image == "sdit_image")
                                            {{-- <span class="label label-primary">SDIT</span> --}}
                                            SDIT
                                        @elseif($d->category_image == "mts_image")
                                            {{-- <span class="label label-primary">MTS</span> --}}
                                            MTS
                                        @elseif($d->category_image == "ma_image")
                                            {{-- <span class="label label-primary">MA</span> --}}
                                            MA
                                        @elseif($d->category_image == "mdt_image")
                                            {{-- <span class="label label-primary">MDT</span> --}}
                                            MDT
                                        @elseif($d->category_image == "other_image")
                                            {{-- <span class="label label-primary">OTHER</span> --}}
                                            OTHER
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('/storage/image/'.$d->image)}}" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" data-placement="right" title="View Image">
                                            <img class="" style="width:70px; border-radius:10%;" src="{{url('/storage/image/'.$d->image)}}">
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        {{date('d M Y', strtotime($d->updated_at))}}
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-success btn-xs open-modal"><i class="fa fa-edit"></i> Edit</button>
                                        <a href="{{route('ct-gallery-delete', $d->id)}}" id="btn-co-delete" class="btn btn-danger btn-xs"  style="margin: 3px;"><i class="fa fa-trash"></i> Delete</a>
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

            // var table = $(function () {
            //     $('#example1').DataTable()
            // });

            // Start DataTable Biasa
            var table = $('#example1').DataTable({
                            responsive: true,
                            language: {
                                searchPlaceholder: 'Search...',
                                sSearch: '',
                                lengthMenu: '_MENU_ items/page',
                            }
                        });
            // End DataTable Biasa

            // Start Edit Modal
                table.on('click', '.open-modal', function (){
                    
                    $tr = $(this).closest('tr');
                    if ($($tr).hasClass('child')) {
                        $tr = $tr.prev('.parent');
                    }

                    var data = table.row($tr).data();
                    console.log(data);

                    $('#name_image_edit').val(data[2]);
                    $('#category_image_edit').val(data[3]);
                    $('#image_edit').val(data[4]);

                    $('#editForm').attr('action', '/ct-gallery-update/'+ data[0]);
                    $('#editModal').modal('show');
                });
            // End Edit Modal

        });
        
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