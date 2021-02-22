@extends('layouts.master-landingpage')
@section('content-landingpage')

    <!--================Contact Area =================-->
        <section class="section-top-border">
            <div class="container">
                <div class="main_title text-center p-0">
        			<h2>Kontak Kami</h2>
        			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid nemo. Illo earum repellat nulla vero dicta excepturi a vel nesciunt, voluptate eos eaque numquam doloribus quisquam voluptatem illum vitae.</p>
        		</div>
                <div id="" class="mapBox">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31722.34427502119!2d106.88128878884821!3d-6.356101553589016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5562236d87%3A0xfde09a708a94edf4!2sYayasan%20Pondok%20Pesantren%20Yatim%20Piatu%20Ulul%20llmi!5e0!3m2!1sen!2sid!4v1611473130999!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Jakarta Timur, Indonesia</h6>
                                <p>Pondok Pesantren Ulul Ilmi</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="tel:08885000099">+62-888-5000-099</a></h6>
                                <p>Pondok Pesantren Ulul Ilmi</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="mailto:ululilmijkt@gmail.com">ululilmijkt@gmail.com</a></h6>
                                <p>Pondok Pesantren Ulul Ilmi</p>
                            </div>
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