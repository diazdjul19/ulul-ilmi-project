@extends('layouts.master-landingpage')
@section('content-landingpage')
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="main_title text-center p-0">
        			<h4 style="font-family: Arial, Helvetica, sans-serif;color:black;">{{$data->name_section}}</h4>
        			<br>
                    @if ($data->file_information != null)
                        <a href="{{url('/storage/files_information_ppdb/'.$data->file_information)}}" target="_blank" class="genric-btn danger large" style="border-radius: 3%; font-size:15px;"><i class="fa fa-cloud-download"></i> Download Info PPDB</a>
                    @elseif($data->file_information == null)
                        {{-- Kosongkan Saja --}}
                    @endif
            </div>

            <div class="section-top-border">
                <div class="container">
                    <div class="row">
                        @if ($data->content_section != null)
                            {!!$data->content_section!!}
                        @elseif ($data->content_section == null)
                            {{-- Kosongkan Saja --}}
                        @endif
                    </div>
                </div>
            </div>

            
        </div>
    </div>
@endsection