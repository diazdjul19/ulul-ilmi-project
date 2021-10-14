@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-edit"></i>
            CT Pendidikan Edit
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">CT Pendidikan</a></li>
            <li class="active">CT Pendidikan Edit</li>
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
                CT Pendidikan Edit 
                <br>
                <span style="font-size: 15px; margin-left:30px;">
                    @if ($data->ct_pdd_category == "ct_default")
                        <span class="label label-primary">Category Default</span>                                  
                    @elseif($data->ct_pdd_category == "ct_custom")
                        <span class="label label-info">Category Custom</span>
                    @endif
                </span>
                <small class="pull-right">Last update : <span class="label label-success">{{date('d M Y', strtotime($data->updated_at))}}</span></small>
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->

        <div class="row">
            <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                <div class="col-md-12">
                    <form class="form-sample" action="{{route('ct-pdd-update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('put')}}
                        <!-- /.box-body -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="" for="exampleInputEmail1">Nama Content</label>  
                                        @if ($data->ct_pdd_category == 'ct_default')
                                            <input type="text" name="ct_pdd_name" class="form-control" id="exampleInputEmail1" autocomplete="off" value="{{$data->ct_pdd_name}}" readonly required >
                                        @elseif($data->ct_pdd_category == 'ct_custom')
                                            <input type="text" name="ct_pdd_name" class="form-control" id="exampleInputEmail1" autocomplete="off" value="{{$data->ct_pdd_name}}" required >
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                        @if ($data->ct_pdd_category == 'ct_default')
                                            <input type="text" name="ct_pdd_uc" class="form-control" id="exampleInputEmail1" autocomplete="off" value="{{$data->ct_pdd_uc}}" readonly required >
                                        @elseif($data->ct_pdd_category == 'ct_custom')
                                            <input type="text" name="ct_pdd_uc" class="form-control" id="exampleInputEmail1" autocomplete="off" value="{{$data->ct_pdd_uc}}" required >
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <label class="" for="exampleInputEmail1">Jenjang Pendidikan</label>  
                                        <select class="form-control" name="ct_pdd_jp" placeholder="" required >
                                            @if ($data->ct_pdd_jp == "SDIT")
                                                <option value="SDIT" selected>SDIT</option>
                                            @elseif($data->ct_pdd_jp == "MTS")
                                                <option value="MTS" selected>MTS</option>
                                            @elseif($data->ct_pdd_jp == "MA")
                                                <option value="MA" selected>MA</option>
                                            @elseif($data->ct_pdd_jp == "MDT")
                                                <option value="MDT" selected>MDT</option>
                                            @endif
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">Category</label>
                                        <select class="form-control" name="ct_pdd_category" placeholder="" required >
                                            @if ($data->ct_pdd_category == "ct_default")
                                                <option value="ct_default" selected>Category Default</option>
                                            @elseif($data->ct_pdd_category == "ct_custom")
                                                <option value="ct_custom" selected>Category Custom</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ISI CONTENT</label>
                                        <textarea id="note1" name="ct_pdd_text_content">{{$data->ct_pdd_text_content}}</textarea>
                                        <span><i>Lorem ipsum dolor sit amet consectetur adipisicing elit.</i></span>
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
