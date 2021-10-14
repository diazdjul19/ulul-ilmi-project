@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-edit"></i>
            CT Contact Edit
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">CT Contact</a></li>
            <li class="active">CT Contact Edit</li>
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
                CT Contact Edit
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        
        <div class="row">
            <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                <div class="col-md-12"> 
                    <form class="form-sample" action="{{route('ct-contact.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('put')}}
                        <!-- /.box-body -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="" for="exampleInputEmail1">Nama Contact</label>
                                        <input type="text" name="name_contact" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="" readonly value="{{$data->name_contact}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                        <input type="text" name="md5_unik_code" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="" readonly value="{{$data->md5_unik_code}}">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="" for="exampleInputEmail1">Last Update</label>
                                        <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="" readonly value="{{date('d M Y', strtotime($data->updated_at))}}">
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ISI CONTENT</label>
                                        <textarea name="content_contact" id="" rows="10" style="width: 100%; padding: 10px; line-height: 1.5; border-radius: 5px; border: 1px solid #ccc; box-shadow: 1px 1px 1px #999;">{{$data->content_contact}}</textarea>
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
