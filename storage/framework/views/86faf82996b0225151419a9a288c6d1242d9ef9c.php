
<?php $__env->startSection('content-landingpage'); ?>
    <!--================About Area =================-->
	<section class="about_area" style="padding: 50px 0px 50px 0px;">
		<div class="container">
			<div class="row about_inner">
				<div class="col-lg-4" style="margin:10px 0px 10px 0px;">
					
					<?php if($md5_logo_sdit != null): ?>
						<span class="text-center"><?php echo $md5_logo_sdit->ct_pdd_text_content; ?></span>
					<?php elseif($md5_logo_sdit == null): ?>
						
					<?php endif; ?>
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
									<?php if($md5_kata_pengantar != null): ?>
										<span><?php echo $md5_kata_pengantar->ct_pdd_text_content; ?></span>
									<?php elseif($md5_kata_pengantar == null): ?>
										
									<?php endif; ?>
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
							<?php if($md5_visi != null): ?>
								<span><?php echo $md5_visi->ct_pdd_text_content; ?></span>
							<?php elseif($md5_visi == null): ?>
								
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-defination">
							<h4 class="mb-20 text-center">Misi</h4>
							<?php if($md5_misi != null): ?>
								<span><?php echo $md5_misi->ct_pdd_text_content; ?></span>
							<?php elseif($md5_misi == null): ?>
								
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-top-border">
			<div class="container">
				<h3 class="mb-30 title_color text-center">Gallery SDIT</h3>
				<div class="row gallery-item">
					<?php $__currentLoopData = $data_gallery_sdit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-3 text-center p-2">
							<a class="img-gal" href="<?php echo e(url('/storage/image/'.$d->image)); ?>" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" data-placement="right" title="View Image">
								<img class="img-fluid" style="border-radius:3%; width:100%; height:200px;" src="<?php echo e(url('/storage/image/'.$d->image)); ?>">
							</a>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<br>
				<br>
				<div class="d-flex mt-2 mr-5 flex-wrap justify-content-center">
					<nav class="">
					<ul class="pagination separated pagination-info">
						<li class="page-item"><?php echo e($data_gallery_sdit->links()); ?></li>
					</ul>
					</nav>
				</div>

			</div>
		</div>

		
		<?php $__currentLoopData = $data_ct_custom_sdit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="section-top-border">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">
							<?php echo $d->ct_pdd_text_content; ?>

						</div>
					</div>	
				</div>
			</div>				
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			

		<div class="section-top-border">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="single-defination">
							<?php if($md5_infolain_01 != null): ?>
								<span><?php echo $md5_infolain_01->ct_pdd_text_content; ?></span>
							<?php elseif($md5_infolain_01 == null): ?>
								
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							<?php if($md5_infolain_02 != null): ?>
								<span><?php echo $md5_infolain_02->ct_pdd_text_content; ?></span>
							<?php elseif($md5_infolain_02 == null): ?>
								
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							<?php if($md5_infolain_03 != null): ?>
								<span><?php echo $md5_infolain_03->ct_pdd_text_content; ?></span>
							<?php elseif($md5_infolain_03 == null): ?>
								
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-defination">
							<?php if($md5_infolain_04 != null): ?>
								<span><?php echo $md5_infolain_04->ct_pdd_text_content; ?></span>
							<?php elseif($md5_infolain_04 == null): ?>
								
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master-landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ulul-ilmi-project\resources\views/view_landingpage/pendidikan-sdit-web.blade.php ENDPATH**/ ?>