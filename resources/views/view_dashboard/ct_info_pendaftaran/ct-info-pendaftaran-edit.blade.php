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
            <li><a href="{{ URL::previous() }}">CT Informasi Pendaftaran</a></li>
            <li class="active">CT Informasi Pendaftaran Edit</li>

        </ol>
    </section>

    <br>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
            <h2 class="page-header">
                <a href="{{ URL::previous() }}" data-toggle="tooltip" title="Back" data-placement="top"><i class="fa fa-arrow-circle-left" style="margin-right: 5px;"></i></a>
                    Edit Informasi PPDB
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        
        <div class="row">
            <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                <div class="col-md-12">

                    <form class="form-sample" action="{{route('ct-info-ppdb.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('put')}}
                        <!-- /.box-body -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="" for="exampleInputEmail1">Nama Section <span style="color: red;">*</span></label>
                                        <input type="text" name="name_section" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Example : Tata Cara Pendaftaran" value="{{$data->name_section}}" required >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                        <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="{{$data->md5_uc}}" readonly value="">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">Upload File Document</label>
                                        @if($data->file_information)
                                        <br>
                                            <a href="{{url('/storage/files_information_ppdb/'.$data->file_information)}}" target="_blank" class="label label-info" style="font-size: 12px;" >{{$data->file_information}}</a>
                                        <br>
                                        @endif
                                        
                                        <input class="form-control" type="file" name="file_information" id="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="note1">CONTENT INFO PENDAFTARAN</label>
                                        <textarea id="note1" name="content_section">{{$data->content_section}}</textarea>
                                        <span><i>Lorem ipsum dolor sit amet consectetur adipisicing elit.</i></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                
                        <!-- /.box-footer -->
                        <div class="box-footer">
                            <a href="{{ URL::previous() }}" class="btn btn-warning" ><i class="fa  fa-arrow-circle-left"></i> Back</a>
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
    </section>
@endsection

@push('summernote')
    <script>
        $(function(){
            'use strict';

            // Summernote editor
            $('#note1').summernote({
            height: 150,
            tooltip: false
            })

        });
    </script>
@endpush
