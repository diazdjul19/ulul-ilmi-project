
<?php $__env->startSection('content-landingpage'); ?>
		<!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<?php if($md5_text_on_bgimg != null): ?>
							<?php echo $md5_text_on_bgimg->ct_home_text_content; ?>

						<?php elseif($md5_text_on_bgimg == null): ?>
							
						<?php endif; ?>
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
					<?php if($md5_text_sambutan != null): ?>
						<?php echo $md5_text_sambutan->ct_home_text_content; ?>

					<?php elseif($md5_text_sambutan == null): ?>
						
					<?php endif; ?>
				</div>
			</div>
		</section>
		<!--================End Sambutan Area =================-->

		<!--================Jenjang Pendidikan Area =================-->
		<section class="finance_area">
			<div class="container">
				<div class="finance_inner row">
					<div class="col-lg-3 col-sm-6">
						<a href="<?php echo e(route('pendidikan-sdit-web')); ?>">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										
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
						<a href="<?php echo e(route('pendidikan-mts-web')); ?>">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										
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
						<a href="<?php echo e(route('pendidikan-ma-web')); ?>">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										
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
						<a href="<?php echo e(route('pendidikan-mdt-web')); ?>">
							<div class="finance_item">
								<div class="media">
									<div class="d-flex">
										
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

		<?php $__currentLoopData = $data_ct_home_custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="section-top-border">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">
							<?php echo $d->ct_home_text_content; ?>

						</div>
					</div>	
				</div>
			</div>				
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<!--================Latest Blog Area =================-->
		<section class="latest_blog_area p_120">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if($md5_text_content_berita != null): ?>
							<?php echo $md5_text_content_berita->ct_home_text_content; ?>

						<?php elseif($md5_text_content_berita == null): ?>
							
						<?php endif; ?>
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

		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ulul-ilmi-project\resources\views/view_landingpage/index-landingpage.blade.php ENDPATH**/ ?>