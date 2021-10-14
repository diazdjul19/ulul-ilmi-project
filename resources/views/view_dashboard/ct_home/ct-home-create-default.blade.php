@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-edit"></i>
            CT Home Create Default Category
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">CT Home</a></li>
            <li class="active">CT Home Create</li>
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
                CT Home Create Default Category
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        
        {{-- Untuk Text on background image --}}
        @if ($cek_code == "13299d20250b1fbd9f7077363b7cf053")
            <div class="row">
                <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                    <div class="col-md-12">
                        <form class="form-sample" action="{{route('ct-home-store-default')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- /.box-body -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="" for="exampleInputEmail1">Nama Content</label>  
                                                <input type="text" name="ct_home_name" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Nama Content" required readonly value="Text On Background Image">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                                <input type="text" name="ct_home_uc" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Example : Hello World" required readonly value="13299d20250b1fbd9f7077363b7cf053">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="exampleInputEmail1">Category</label>
                                                <select class="form-control" name="ct_home_category" placeholder="" required >
                                                    <option value="disabled" disabled selected> Pilih Category </option>
                                                    <option value="ct_default" selected>Category Default</option>
                                                    {{-- <option value="ct_custom">Category Custom</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ISI CONTENT</label>
                                                <textarea id="note1" name="ct_home_text_content"></textarea>
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
        {{-- Untuk Text sambutan --}}
        @elseif($cek_code == "e2b42d12d3dae75f352f37cb73e466f0")
            <div class="row">
                <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                    <div class="col-md-12">
                        <form class="form-sample" action="{{route('ct-home-store-default')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- /.box-body -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="" for="exampleInputEmail1">Nama Content</label>  
                                                <input type="text" name="ct_home_name" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Nama Content" required readonly value="Text Sambutan">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                                <input type="text" name="ct_home_uc" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Example : Hello World" required readonly value="e2b42d12d3dae75f352f37cb73e466f0">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="exampleInputEmail1">Category</label>
                                                <select class="form-control" name="ct_home_category" placeholder="" required >
                                                    <option value="disabled" disabled selected> Pilih Category </option>
                                                    <option value="ct_default" selected>Category Default</option>
                                                    {{-- <option value="ct_custom">Category Custom</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ISI CONTENT</label>
                                                <textarea id="note1" name="ct_home_text_content"></textarea>
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
        {{-- Untuk Text content berita --}}
        @elseif($cek_code == "0c98894eb5a8c4eec794cece29615995")
            <div class="row">
                <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                    <div class="col-md-12">
                        <form class="form-sample" action="{{route('ct-home-store-default')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- /.box-body -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="" for="exampleInputEmail1">Nama Content</label>  
                                                <input type="text" name="ct_home_name" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Nama Content" required readonly value="Text Header Content Berita">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                                <input type="text" name="ct_home_uc" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Example : Hello World" required readonly value="0c98894eb5a8c4eec794cece29615995">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="" for="exampleInputEmail1">Category</label>
                                                <select class="form-control" name="ct_home_category" placeholder="" required >
                                                    <option value="disabled" disabled selected> Pilih Category </option>
                                                    <option value="ct_default" selected>Category Default</option>
                                                    {{-- <option value="ct_custom">Category Custom</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ISI CONTENT</label>
                                                <textarea id="note1" name="ct_home_text_content"></textarea>
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
        @else
            <span>Maaf MD5 Unik Code anda tidak di temukan.</span>
        @endif
        
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
