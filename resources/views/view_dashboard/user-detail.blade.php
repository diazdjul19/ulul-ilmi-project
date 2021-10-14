@extends('layouts.master-dashboard')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-info-circle"></i>
            User Detail
            <small>...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="{{ URL::previous() }}">User Management</a></li>
            <li class="active">User Detail</li>
        </ol>
    </section>

    <br>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
            <h2 class="page-header">
                <a href="{{ URL::previous() }}" data-toggle="tooltip" title="Back" data-placement="top"><i class="fa fa-arrow-circle-left"></i></a> Detail Profil "{{$data->name}}"
                <small class="pull-right">Last update: {{date('d M Y', strtotime($data->updated_at))}}</small>
            </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        
        <div class="row">
            <div class="row justify-content-center" style="padding: 0px 15px 0px 15px;">                
                <div class="col-sm-6">
                    <table class="table w-100">
                        <tr>
                            <th>Nama User</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email User</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Nomer HP</th>
                            <td>{{$data->no_hp}}</td>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <td>{{$data->tmp_lahir}}, {{date('d M Y', strtotime($data->tgl_lahir))}}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>
                                @if ($data->gender == 'L')
                                    <span class="label label-primary" style="font-size:12px;">Laki - Laki</span> 
                                @elseif($data->gender == 'P')
                                    <span class="label label-danger" style="font-size:12px;">Perempuan</span> 
                                @endif
                            </td>
                        </tr>
                        
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table w-100">
                        
                        <tr>
                            <th>Level User</th>
                            <td>
                                @if ($data->level == 'A')
                                    <span class="label label-primary" style="font-size:12px;">Admin</span> 
                                @elseif($data->level == 'O')
                                    <span class="label label-info" style="font-size:12px;">Operator</span> 
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal & Waktu Register</th>
                            <td>{{date('d M Y  - H:i:s', strtotime($data->created_at))}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($data->status == 'active')
                                    <span class="label label-info" style="font-size:12px;">Active</span> 
                                @elseif($data->status == 'not_active')
                                    <span class="label label-warning" style="font-size:12px;">Not Active</span> 
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Foto Anggota</th>
                            <td><img class="" style="width:120px; border-radius:10%;" src="{{url('/storage/user/'.$data->foto_user)}}"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection