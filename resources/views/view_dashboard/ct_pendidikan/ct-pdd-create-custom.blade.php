@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-edit"></i>
            CT Pendidikan Create Custom Category
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">CT Home</a></li>
            <li class="active">CT Pendidikan Create</li>
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
                CT Pendidikan Create Custom Category
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        
        <div class="row">
            <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                <div class="col-md-12">

                    <form class="form-sample" action="{{route('ct-pdd-store-custom')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- /.box-body -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="" for="exampleInputEmail1">Nama Content Custom</label>
                                        <input type="text" name="ct_pdd_name" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Nama Content" required >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                        <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Example : Hello World">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">Jenjang Pendidikan</label>
                                        <select class="form-control" name="ct_pdd_jp" placeholder="" required >
                                            <option value="disabled" disabled> Pilih Pendidikan </option>
                                            @if (Request::is('ct-pdd-sdit-create-custom'))
                                                <option value="SDIT" selected>SDIT</option>
                                            @elseif(Request::is('ct-pdd-mts-create-custom'))
                                                <option value="MTS" selected>MTS</option>
                                            @elseif(Request::is('ct-pdd-ma-create-custom'))
                                                <option value="MA" selected>MA</option>
                                            @elseif(Request::is('ct-pdd-mdt-create-custom'))
                                                <option value="MDT" selected>MDT</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">Category</label>
                                        <select class="form-control" name="ct_pdd_category" placeholder="" required >
                                            <option value="disabled" disabled> Pilih Category </option>
                                            {{-- <option value="ct_default" selected>Category Default</option> --}}
                                            <option value="ct_custom" selected>Category Custom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ISI CONTENT</label>
                                        <textarea id="note1" name="ct_pdd_text_content"></textarea>
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
