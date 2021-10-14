@extends('layouts.master-landingpage')
@section('content-landingpage')

    <!--================Contact Area =================-->
        <section class="section-top-border">
            <div class="container">
                <div class="main_title text-center p-0" style="margin-top: 50px;">
                    @if ($md5_judul_kata_pengantar != null)
                        <h2>{{$md5_judul_kata_pengantar->content_contact}}</h2>
                    @elseif ($md5_judul_kata_pengantar == null)
                        {{-- KOSONG --}}
                    @endif

                    @if ($md5_kata_pengantar != null)
                        <p>{{$md5_kata_pengantar->content_contact}}</p>
                    @elseif ($md5_kata_pengantar == null)
                        {{-- KOSONG --}}
                    @endif
        		</div>

                <div id="" class="mapBox text-center" style="width: 100%; height:100%;">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31722.34427502119!2d106.88128878884821!3d-6.356101553589016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5562236d87%3A0xfde09a708a94edf4!2sYayasan%20Pondok%20Pesantren%20Yatim%20Piatu%20Ulul%20llmi!5e0!3m2!1sen!2sid!4v1611473130999!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe> --}}
                    @if ($md5_iframe_googlemaps != null)
                        {!!$md5_iframe_googlemaps->content_contact!!}
                    @elseif ($md5_iframe_googlemaps == null)
                        {{-- KOSONG --}}
                    @endif

                    
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            
                            @if ($md5_alamat_lengkap != null)
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Pondok Pesantren Ulul Ilmi</h6>
                                <p>{{$md5_alamat_lengkap->content_contact}}</p>
                            </div>
                            @elseif ($md5_alamat_lengkap == null)
                                {{-- KOSONG --}}
                            @endif

                            @if ($md5_nomer_telpon != null)
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                    <h6><a href="tel:{{$md5_nomer_telpon->content_contact}}">{{$md5_nomer_telpon->content_contact}}</a></h6>
                                    <p></p>
                            </div>
                                
                            @elseif ($md5_nomer_telpon == null)
                                {{-- KOSONG --}}
                            @endif

                            @if ($md5_email != null)
                                <div class="info_item">
                                    <i class="lnr lnr-envelope"></i>
                                        <h6><a href="mailto:{{$md5_email->content_contact}}">{{$md5_email->content_contact}}</a></h6>
                                        <p></p>
                                </div>
                            @elseif ($md5_email == null)
                                {{-- KOSONG --}}
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!--================Contact Area =================-->
@endsection
