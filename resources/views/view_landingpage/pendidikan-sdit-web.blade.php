@extends('layouts.master-landingpage')
@section('content-landingpage')
    <!--================About Area =================-->
        <section class="about_area" style="padding: 50px 0px 50px 0px;">
        	<div class="container">
        		<div class="row about_inner">
					<div class="col-lg-4" style="margin:10px 0px 10px 0px;">
						<img class="img-fluid rounded mx-auto d-block" src="/assets-ululilmi/jenjang_pendidikan/sdit.png" style="width:150px;height: 150px;" alt="Responsive image">
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
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident delectus doloremque itaque unde. Dolor in id eligendi culpa soluta tempora quae illum, nisi inventore dolore excepturi quas consequuntur officia. Qui!
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
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-defination">
							<h4 class="mb-20 text-center">Misi</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-top-border">
			<div class="container">
				<h3 class="mb-30 title_color text-center">Gallery SDIT</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
                        <a href="/assets-ululilmi/ayo-mondok.jpg" class="img-gal"><div class="single-gallery-image" style="border-radius:3%; background: url(/assets-ululilmi/ayo-mondok.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g2.jpg" class="img-gal"><div class="single-gallery-image" style="border-radius:3%; background: url(/assets-landingpage/img/elements/g2.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g3.jpg" class="img-gal"><div class="single-gallery-image" style="border-radius:3%; background: url(/assets-landingpage/img/elements/g3.jpg);"></div></a>
                    </div>
				</div>

				<nav class="blog-pagination justify-content-center d-flex">
					<ul class="pagination">
						<li class="page-item">
							<a href="#" class="page-link" aria-label="Previous">
								<span aria-hidden="true">
									<span class="lnr lnr-chevron-left"></span>
								</span>
							</a>
						</li>
						<li class="page-item"><a href="#" class="page-link">01</a></li>
						<li class="page-item active"><a href="#" class="page-link">02</a></li>
						<li class="page-item"><a href="#" class="page-link">03</a></li>
						<li class="page-item"><a href="#" class="page-link">04</a></li>
						<li class="page-item"><a href="#" class="page-link">09</a></li>
						<li class="page-item">
							<a href="#" class="page-link" aria-label="Next">
								<span aria-hidden="true">
									<span class="lnr lnr-chevron-right"></span>
								</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="section-top-border">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="single-defination">
							<h4 class="mb-20">Definition 01</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							<h4 class="mb-20">Definition 02</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							<h4 class="mb-20">Definition 03</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							<h4 class="mb-20">Definition 03</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection


