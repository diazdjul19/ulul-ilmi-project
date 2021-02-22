@extends('layouts.master-landingpage')
@section('content-landingpage')
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="main_title text-center p-0">
        			<h2>Gallery Kami</h2>
        			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid nemo. Illo earum repellat nulla vero dicta excepturi a vel nesciunt, voluptate eos eaque numquam doloribus quisquam voluptatem illum vitae.</p>
        		</div>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="/assets-ululilmi/ayo-mondok.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-ululilmi/ayo-mondok.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g2.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g2.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g3.jpg);"></div></a>
                    </div>
                    <div class="col-md-6">
                        <a href="/assets-landingpage/img/elements/g4.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g4.jpg);"></div></a>
                    </div>
                    <div class="col-md-6">
                        <a href="/assets-landingpage/img/elements/g5.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g5.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g6.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g6.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g7.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g7.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="/assets-landingpage/img/elements/g8.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(/assets-landingpage/img/elements/g8.jpg);"></div></a>
                    </div>
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


@endsection