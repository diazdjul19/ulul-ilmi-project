@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-edit"></i>
            CT Pendidikan Create Default Category
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
                CT Pendidikan Create Default Category
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        
        <div class="row">
            <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                <div class="col-md-12">

                    @if (Request::is('ct-pdd-sdit-create-default'))
                        <form class="form-sample" action="{{route('ct-pdd-store-default')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- /.box-body -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="" for="exampleInputEmail1">Nama Content Default</label>
                                            <select class="form-control" id="select-search" name="ct_pdd_name" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Nama Content </option>
                                                @if ($cekkode_logo_sdit == null )
                                                    <option value="Logo SDIT" >Logo SDIT</option>
                                                @elseif($cekkode_logo_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_kata_pengantar_sdit == null )
                                                    <option value="Kata Pengantar" >Kata Pengantar</option>
                                                @elseif($cekkode_kata_pengantar_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_visi_sdit == null )
                                                    <option value="Visi SDIT" >Visi SDIT</option>
                                                @elseif($cekkode_visi_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_misi_sdit == null )
                                                    <option value="Misi SDIT" >Misi SDIT</option>
                                                @elseif($cekkode_misi_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_01_sdit == null )
                                                    <option value="Info Lain 01" >Info Lain 01</option>
                                                @elseif($cekkode_infolain_01_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_02_sdit == null )
                                                    <option value="Info Lain 02" >Info Lain 02</option>
                                                @elseif($cekkode_infolain_02_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_03_sdit == null )
                                                    <option value="Info Lain 03" >Info Lain 03</option>
                                                @elseif($cekkode_infolain_03_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_04_sdit == null )
                                                    <option value="Info Lain 04" >Info Lain 04</option>
                                                @elseif($cekkode_infolain_04_sdit != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="MD5 Otomatis Terbuat" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Jenjang Pendidikan</label>
                                            <select class="form-control" name="ct_pdd_jp" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Pendidikan </option>
                                                <option value="SDIT" selected>SDIT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Category</label>
                                            <select class="form-control" name="ct_pdd_category" placeholder="" required >
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
                    @elseif(Request::is('ct-pdd-mts-create-default'))
                        <form class="form-sample" action="{{route('ct-pdd-store-default')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- /.box-body -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="" for="exampleInputEmail1">Nama Content Default</label>
                                            <select class="form-control" id="select-search" name="ct_pdd_name" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Nama Content </option>
                                                @if ($cekkode_logo_mts == null )
                                                    <option value="Logo MTS" >Logo MTS</option>
                                                @elseif($cekkode_logo_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_kata_pengantar_mts == null )
                                                    <option value="Kata Pengantar" >Kata Pengantar</option>
                                                @elseif($cekkode_kata_pengantar_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_visi_mts == null )
                                                    <option value="Visi MTS" >Visi MTS</option>
                                                @elseif($cekkode_visi_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_misi_mts == null )
                                                    <option value="Misi MTS" >Misi MTS</option>
                                                @elseif($cekkode_misi_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_01_mts == null )
                                                    <option value="Info Lain 01" >Info Lain 01</option>
                                                @elseif($cekkode_infolain_01_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_02_mts == null )
                                                    <option value="Info Lain 02" >Info Lain 02</option>
                                                @elseif($cekkode_infolain_02_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_03_mts == null )
                                                    <option value="Info Lain 03" >Info Lain 03</option>
                                                @elseif($cekkode_infolain_03_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_04_mts == null )
                                                    <option value="Info Lain 04" >Info Lain 04</option>
                                                @elseif($cekkode_infolain_04_mts != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="MD5 Otomatis Terbuat" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Jenjang Pendidikan</label>
                                            <select class="form-control" name="ct_pdd_jp" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Pendidikan </option>
                                                <option value="MTS" selected>MTS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Category</label>
                                            <select class="form-control" name="ct_pdd_category" placeholder="" required >
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
                    @elseif(Request::is('ct-pdd-ma-create-default'))
                        <form class="form-sample" action="{{route('ct-pdd-store-default')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- /.box-body -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="" for="exampleInputEmail1">Nama Content Default</label>
                                            <select class="form-control" id="select-search" name="ct_pdd_name" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Nama Content </option>
                                                @if ($cekkode_logo_ma == null )
                                                    <option value="Logo MA" >Logo MA</option>
                                                @elseif($cekkode_logo_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_kata_pengantar_ma == null )
                                                    <option value="Kata Pengantar" >Kata Pengantar</option>
                                                @elseif($cekkode_kata_pengantar_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_visi_ma == null )
                                                    <option value="Visi MA" >Visi MA</option>
                                                @elseif($cekkode_visi_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_misi_ma == null )
                                                    <option value="Misi MA" >Misi MA</option>
                                                @elseif($cekkode_misi_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_01_ma == null )
                                                    <option value="Info Lain 01" >Info Lain 01</option>
                                                @elseif($cekkode_infolain_01_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_02_ma == null )
                                                    <option value="Info Lain 02" >Info Lain 02</option>
                                                @elseif($cekkode_infolain_02_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_03_ma == null )
                                                    <option value="Info Lain 03" >Info Lain 03</option>
                                                @elseif($cekkode_infolain_03_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_04_ma == null )
                                                    <option value="Info Lain 04" >Info Lain 04</option>
                                                @elseif($cekkode_infolain_04_ma != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="MD5 Otomatis Terbuat" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Jenjang Pendidikan</label>
                                            <select class="form-control" name="ct_pdd_jp" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Pendidikan </option>
                                                <option value="MA" selected>MA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Category</label>
                                            <select class="form-control" name="ct_pdd_category" placeholder="" required >
                                                <option value="disabled" disabled> Pilih Category </option>
                                                <option value="ct_default" selected>Category Default</option>
                                                {{-- <option value="ct_custom" selected>Category Custom</option> --}}
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
                    @elseif(Request::is('ct-pdd-mdt-create-default'))
                        <form class="form-sample" action="{{route('ct-pdd-store-default')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- /.box-body -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="" for="exampleInputEmail1">Nama Content Default</label>
                                            <select class="form-control" id="select-search" name="ct_pdd_name" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Nama Content </option>
                                                @if ($cekkode_logo_mdt == null )
                                                    <option value="Logo MDT" >Logo MDT</option>
                                                @elseif($cekkode_logo_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_kata_pengantar_mdt == null )
                                                    <option value="Kata Pengantar" >Kata Pengantar</option>
                                                @elseif($cekkode_kata_pengantar_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_visi_mdt == null )
                                                    <option value="Visi MDT" >Visi MDT</option>
                                                @elseif($cekkode_visi_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_misi_mdt == null )
                                                    <option value="Misi MDT" >Misi MDT</option>
                                                @elseif($cekkode_misi_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_01_mdt == null )
                                                    <option value="Info Lain 01" >Info Lain 01</option>
                                                @elseif($cekkode_infolain_01_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_02_mdt == null )
                                                    <option value="Info Lain 02" >Info Lain 02</option>
                                                @elseif($cekkode_infolain_02_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_03_mdt == null )
                                                    <option value="Info Lain 03" >Info Lain 03</option>
                                                @elseif($cekkode_infolain_03_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif

                                                @if ($cekkode_infolain_04_mdt == null )
                                                    <option value="Info Lain 04" >Info Lain 04</option>
                                                @elseif($cekkode_infolain_04_mdt != null)
                                                    {{-- Kosongkan Saja --}}
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">MD5 Unik Code</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="MD5 Otomatis Terbuat" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Jenjang Pendidikan</label>
                                            <select class="form-control" name="ct_pdd_jp" placeholder="" required >
                                                <option value="disabled" disabled selected> Pilih Pendidikan </option>
                                                <option value="MDT" selected>MDT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="" for="exampleInputEmail1">Category</label>
                                            <select class="form-control" name="ct_pdd_category" placeholder="" required >
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
                    @endif

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

@push('select-custom')
    <link href="/assets-admin/bower_components/select_custom/css/custom.css" rel="stylesheet">
    <script src="/assets-admin/bower_components/select_custom/js/custom.js"></script>

    <script>
        $(document).ready(function () {
        //change selectboxes to selectize mode to be searchable
        $("#select-search").select2();
            
        });
    </script>
@endpush