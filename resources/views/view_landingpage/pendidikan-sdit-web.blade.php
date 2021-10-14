@extends('layouts.master-landingpage')
@section('content-landingpage')
    <!--================About Area =================-->
	<section class="about_area" style="padding: 50px 0px 50px 0px;">
		<div class="container">
			<div class="row about_inner">
				<div class="col-lg-4" style="margin:10px 0px 10px 0px;">
					{{-- <img class="img-fluid rounded mx-auto d-block" src="/assets-ululilmi/jenjang_pendidikan/sdit.png" style="width:150px;height: 150px;" alt="Responsive image"> --}}
					@if ($md5_logo_sdit != null)
						<span class="text-center">{!!$md5_logo_sdit->ct_pdd_text_content!!}</span>
					@elseif ($md5_logo_sdit == null)
						{{-- KOSONG --}}
					@endif
				</div>

				<div class="col-lg-8" style="margin:10px 0px 10px 0px;">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Sekolah Dasar Islam Terpadu (SDIT)
								<i class="lnr lnr-chevron-down"></i>
								<i class="lnr lnr-chevron-up"></i>
								</button>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									@if ($md5_kata_pengantar != null)
										<span>{!!$md5_kata_pengantar->ct_pdd_text_content!!}</span>
									@elseif ($md5_kata_pengantar == null)
										{{-- KOSONG --}}
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</section>
	<!--================End About Area =================-->
		
		<div class="section-top-border">
			<div class="container">
				<h3 class="mb-30 title_color text-center">Visi & Misi</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="single-defination">
							<h4 class="mb-20 text-center">Visi</h4>
							@if ($md5_visi != null)
								<span>{!!$md5_visi->ct_pdd_text_content!!}</span>
							@elseif ($md5_visi == null)
								{{-- KOSONG --}}
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-defination">
							<h4 class="mb-20 text-center">Misi</h4>
							@if ($md5_misi != null)
								<span>{!!$md5_misi->ct_pdd_text_content!!}</span>
							@elseif ($md5_misi == null)
								{{-- KOSONG --}}
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-top-border">
			<div class="container">
				<h3 class="mb-30 title_color text-center">Gallery SDIT</h3>
				<div class="row gallery-item">
					@foreach ($data_gallery_sdit as $d)
						<div class="col-md-3 text-center p-2">
							<a class="img-gal" href="{{url('/storage/image/'.$d->image)}}" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" data-placement="right" title="View Image">
								<img class="img-fluid" style="border-radius:3%; width:100%; height:200px;" src="{{url('/storage/image/'.$d->image)}}">
							</a>
						</div>
					@endforeach
				</div>
				<br>
				<br>
				<div class="d-flex mt-2 mr-5 flex-wrap justify-content-center">
					<nav class="">
					<ul class="pagination separated pagination-info">
						<li class="page-item">{{$data_gallery_sdit->links()}}</li>
					</ul>
					</nav>
				</div>

			</div>
		</div>

		
		@foreach ($data_ct_custom_sdit as $d)
			<div class="section-top-border">
				<div class="container">
					{{-- <h3 class="mb-30 title_color text-center">{{$d->ct_pdd_name}}</h3> --}}
					<div class="row">
						<div class="col-md-12">
							{!!$d->ct_pdd_text_content!!}
						</div>
					</div>	
				</div>
			</div>				
		@endforeach
			

		<div class="section-top-border">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="single-defination">
							@if ($md5_infolain_01 != null)
								<span>{!!$md5_infolain_01->ct_pdd_text_content!!}</span>
							@elseif ($md5_infolain_01 == null)
								{{-- KOSONG --}}
							@endif
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							@if ($md5_infolain_02 != null)
								<span>{!!$md5_infolain_02->ct_pdd_text_content!!}</span>
							@elseif ($md5_infolain_02 == null)
								{{-- KOSONG --}}
							@endif
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							@if ($md5_infolain_03 != null)
								<span>{!!$md5_infolain_03->ct_pdd_text_content!!}</span>
							@elseif ($md5_infolain_03 == null)
								{{-- KOSONG --}}
							@endif
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							@if ($md5_infolain_04 != null)
								<span>{!!$md5_infolain_04->ct_pdd_text_content!!}</span>
							@elseif ($md5_infolain_04 == null)
								{{-- KOSONG --}}
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection


