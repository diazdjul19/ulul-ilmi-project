<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="/assets-ululilmi/jenjang_pendidikan/Logo-Ponpes-Redesign.png">
        <title>Ulul Ilmi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets-landingpage/css/bootstrap.css">
        <link rel="stylesheet" href="/assets-landingpage/vendors/linericon/style.css">
        <link rel="stylesheet" href="/assets-landingpage/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets-landingpage/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets-landingpage/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="/assets-landingpage/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="/assets-landingpage/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="/assets-landingpage/vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="/assets-landingpage/css/style.css">
        <link rel="stylesheet" href="/assets-landingpage/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu row m0">
                <div class="container">
                    <div class="float-left">
                        <ul class="list header_social">
                            <li><a href="https://www.facebook.com/ppululilmijkt"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/ppululilmijkt/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCZHHVvw4ESxuvepsUf9cTYQ"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="mailto:ululilmijkt@gmail.com"><i class="fa fa-envelope"></i></a></li>
							
                        </ul>
                    </div>
                    <div class="float-right">
                        <a class="dn_btn" href="tel:08885000099">HP : +62-888-5000-099</a>
                        <a class="dn_btn" href="mailto:ululilmijkt@gmail.com">ululilmijkt@gmail.com</a>
                    </div>
                </div>	
            </div>	
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="#"><img src="/assets-ululilmi/logo.svg" style="width:200px; height:60px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item {{ request()->is('/','home-web') ? 'active' : '' }}"><a class="nav-link" href="{{route('home-web')}}">Home</a></li> 
                                <li class="nav-item submenu dropdown {{ request()->is('pendidikan-sdit-web', 'pendidikan-mts-web', 'pendidikan-ma-web', 'pendidikan-mdt-web') ? 'active' : '' }}">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendidikan</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item "><a class="nav-link" href="{{route('pendidikan-sdit-web')}}">SDIT</a></li>
                                        <li class="nav-item "><a class="nav-link" href="{{route('pendidikan-mts-web')}}">MTs</a></li>
                                        <li class="nav-item "><a class="nav-link" href="{{route('pendidikan-ma-web')}}">MA</a></li>
                                        <li class="nav-item "><a class="nav-link" href="{{route('pendidikan-mdt-web')}}">MDT</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown {{ request()->is('gallery-web', 'content-web') ? 'active' : '' }}">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item "><a class="nav-link" href="{{route('gallery-web')}}">Abount Gallery</a></li>
                                        <li class="nav-item "><a class="nav-link" href="{{route('content-web')}}">Abount Content</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item submenu dropdown {{ request()->is('logreg-creator') ? 'active' : '' }}">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item "><a class="nav-link" href="{{route('logreg-creator')}}">Log-Reg Creator</a></li>
                                        <li class="nav-item "><a class="nav-link" href="">Log Siswa</a></li>
                                    </ul>
                                </li> 
                                
                                <li class="nav-item submenu dropdown {{ request()->is('info-ppdb-web') ? 'active' : '' }}">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PPDB</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item "><a class="nav-link" href="{{route('info-ppdb-web')}}">Info Pendaftaran</a></li>
                                        <li class="nav-item "><a class="nav-link" href="">Form Pendaftaran</a></li>
                                        <li class="nav-item "><a class="nav-link" href="">Hasil Seleksi</a></li>
                                    </ul>
                                </li> 
                                
                                <li class="nav-item {{ request()->is('contact-web') ? 'active' : '' }}"><a class="nav-link" href="{{route('contact-web')}}">Kontak</a></li>
                            </ul>

                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
		
		{{-- Start Content Landing Page  --}}
			@yield('content-landingpage')
		{{-- End Content Landing Page --}}
		
        <!--================ start footer Area  =================-->	
        <footer class="footer-area pt-4">
            <div class="container">
	
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p class="col-lg-8 col-md-8 footer-text p-3"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pondok Pesantren Ulul Ilmi - Hak Cipta di lindungi Undang - undang.
					<br>
					Programmer by IT Team <a href="https://imedianet.id/">Imedia Net</a> | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-md-4 footer-social">
							<a href="https://www.facebook.com/ppululilmijkt"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/ppululilmijkt/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.youtube.com/channel/UCZHHVvw4ESxuvepsUf9cTYQ"><i class="fa fa-youtube-play"></i></a>
							<a href="mailto:ululilmijkt@gmail.com"><i class="fa fa-envelope"></i></a>
						</div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="/assets-landingpage/js/jquery-3.3.1.min.js"></script>
        <script src="/assets-landingpage/js/popper.js"></script>
        <script src="/assets-landingpage/js/bootstrap.min.js"></script>
        <script src="/assets-landingpage/js/stellar.js"></script>
        <script src="/assets-landingpage/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="/assets-landingpage/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="/assets-landingpage/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="/assets-landingpage/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="/assets-landingpage/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="/assets-landingpage/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="/assets-landingpage/js/jquery.ajaxchimp.min.js"></script>
        <script src="/assets-landingpage/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="/assets-landingpage/vendors/counter-up/jquery.counterup.js"></script>
        <script src="/assets-landingpage/js/mail-script.js"></script>
        <script src="/assets-landingpage/js/theme.js"></script>
    </body>
</html>