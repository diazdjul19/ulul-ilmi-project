@extends('layouts.master-landingpage')
@section('content-landingpage')
		<!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						@if ($md5_text_on_bgimg != null)
							{!!$md5_text_on_bgimg->ct_home_text_content!!}
						@elseif ($md5_text_on_bgimg == null)
							{{-- KOSONG --}}
						@endif
						<a class="main_btn" href="#">Daftar Sekarang</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

		<!--================Sambutan Area =================-->
		<section class="courses_area" style="padding: 70px 0px 30px 0px;">
			<div class="container">
				<div class="main_title">
					@if ($md5_text_sambutan != null)
						{!!$md5_text_sambutan->ct_home_text_content!!}
					@elseif ($md5_text_sambutan == null)
						{{-- KOSONG --}}
					@endif
				</div>
			</div>
		</section>
		<!--================End Sambutan Area =================-->

		<!--================Jenjang Pendidikan Area =================-->
		<section class="finance_area">
			<div class="container">
				<div class="finance_inner row">
					<div class="col-lg-3 col-sm-6">
						<a href="{{route('pendidikan-sdit-web')}}">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										{{-- <i class="lnr lnr-rocket"></i> --}}
										<img src="/assets-ululilmi/jenjang_pendidikan/sdit.png" style="width:50px;height: 50px;" alt="">

									</div>
									<div class="media-body">
										<h5>Sekolah Dasar<br />Islam Terpadu</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="{{route('pendidikan-mts-web')}}">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										{{-- <i class="lnr lnr-earth"></i> --}}
										<img src="/assets-ululilmi/jenjang_pendidikan/Madrasah-Tsanawiyah.png" style="width:50px;height: 50px;" alt="">
									</div>
									<div class="media-body">
										<h5>Madrasah <br />Tsanawiyah</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="{{route('pendidikan-ma-web')}}">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										{{-- <i class="lnr lnr-smile"></i> --}}
										<img src="/assets-ululilmi/jenjang_pendidikan/Madrasah-Aliyah.png" style="width:50px;height: 50px;" alt="">
									</div>
									<div class="media-body">
										<h5>Madrasah<br />Aliyah</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="{{route('pendidikan-mdt-web')}}">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										{{-- <i class="lnr lnr-tag"></i> --}}
										<img src="/assets-ululilmi/jenjang_pendidikan/Logo-Ponpes-Redesign.png" style="width:50px;height: 50px;" alt="">
									</div>
									<div class="media-body">
										<h5>Madrasah<br />Diniyah Takmiliyah</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!--================End Jenjang Pendidikan Area =================-->

		@foreach ($data_ct_home_custom as $d)
			<div class="section-top-border">
				<div class="container">
					{{-- <h2 class="mb-30 title_color text-center">{{$d->ct_home_name}}</h2> --}}
					<div class="row">
						<div class="col-md-12">
							{!!$d->ct_home_text_content!!}
						</div>
					</div>	
				</div>
			</div>				
		@endforeach

		<!--================Latest Blog Area =================-->
		<section class="latest_blog_area p_120">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						@if ($md5_text_content_berita != null)
							{!!$md5_text_content_berita->ct_home_text_content!!}
						@elseif ($md5_text_content_berita == null)
							{{-- KOSONG --}}
						@endif
					</div>
				</div>
				<div class="row latest_blog_inner">
					<div class="col-lg-3 col-md-6">
						<div class="l_blog_item">
							<img class="img-fluid" src="assets-landingpage/img/latest-blog/l-blog-1.jpg" alt="">
							<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
							<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="l_blog_item">
							<img class="img-fluid" src="assets-landingpage/img/latest-blog/l-blog-2.jpg" alt="">
							<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
							<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="l_blog_item">
							<img class="img-fluid" src="assets-landingpage/img/latest-blog/l-blog-3.jpg" alt="">
							<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
							<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="l_blog_item">
							<img class="img-fluid" src="assets-landingpage/img/latest-blog/l-blog-4.jpg" alt="">
							<a class="date" href="#">25 October, 2018  |  By Mark Wiens</a>
							<a href="single-blog.html"><h4>Addiction When Gambling Becomes A Problem</h4></a>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their desktops, while delivery</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Latest Blog Area =================-->

		
@endsection