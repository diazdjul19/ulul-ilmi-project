
<?php $__env->startSection('content-wrapper'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-phone"></i>
            Controller Contact <br>
            <small style="margin-left: 30px;">...</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ulul Ilmi</a></li>
            <li><a href="#">CT Contact</a></li>
            <li class="active">CT Contact</li>
        </ol>
    </section>

    <section class="content">
        <div class="alert alert-warning">
            <h4>Tips cara penginputan data yang benar!</h4>
            <ul class="margin-bottom-none padding-left-lg">
                <li>Untuk <b>Judul Kata Pengantar</b>, Example : Kontak Kami</li>
                <li>
                    Untuk <b>Kata Pengantar</b>, Example : Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit accusantium veniam necessitatibus nemo veritatis aliquam et repellat voluptates dicta doloribus enim asperiores explicabo eligendi at, in soluta animi ipsum rem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti odit dignissimos dolorum, enim molestias perspiciatis doloremque? Reprehenderit, doloribus veritatis. Fugiat molestias sint doloribus culpa nemo minima fuga consequuntur! Molestiae, soluta!
                </li>
                <li>Untuk <b>Alamat Lengkap</b>, Example : Jl. Pegangsaan Timur No.56 RT.1/RW.1, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310</li>
                <li>Untuk <b>Nomer Telpon</b>, Example : +62xxxxxxxxxxx (Karena kita tinggal di indonesia maka harus menggunakan +62)</li>
                <li>Untuk <b>Email</b>, Example : admin@ululilmi.id</li>
                <li>Untuk <b>Facebook</b>, Example : https://www.facebook.com/ppululilmijkt/ (Masukan link yang menuju halaman facebook)</li>
                <li>Untuk <b>Instagram</b>, Example : https://www.instagram.com/ppululilmijkt/ (Masukan link yang menuju halaman instagram)</li>
                <li>Untu k<b>Youtube</b>, Example : https://www.youtube.com/channel/UCZHHVvw4ESxuvepsUf9cTYQ (Masukan link yang menuju halaman youtube)</li>
            </ul>
        </div>

        
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Table Management Contact</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>

                
                <div class="modal fade" id="modal-create">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tambah Contact</h4>
                            </div>

                            <form action="<?php echo e(route('ct-contact.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-3 col-form-label" for="select-search"><h6 style="color: black; font-weight:bold;font-size:13px;">Nama Contact<span style="color: red;"> *</span></h6></label>
                                                
                                                <div class="col-md-9">
                                                    <select class="form-control" id="select-search" name="name_contact" placeholder="" required style="width: 100%;">
                                                        <option value="disabled" disabled selected> Pilih Nama Contact </option>
                                                        <?php if($cekkode_judul_kata_pengantar == null ): ?>
                                                            <option value="453a39e4d68645d23d37397edcfe39bd" >Judul Kata Pengantar</option>
                                                        <?php elseif($cekkode_judul_kata_pengantar != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_kata_pengantar == null ): ?>
                                                            <option value="b1c37c503878769522af8754271a5437" >Kata Pengantar</option>
                                                        <?php elseif($cekkode_kata_pengantar != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_iframe_googlemaps == null ): ?>
                                                            <option value="0de562d7e944350816715e354eaf7a70" >Iframe Google Maps</option>
                                                        <?php elseif($cekkode_iframe_googlemaps != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_alamat_lengkap == null ): ?>
                                                            <option value="960c7afbb509d8c45e1c3ad7cffa5e5a" >Alamat Lengkap</option>
                                                        <?php elseif($cekkode_alamat_lengkap != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_nomer_telpon == null ): ?>
                                                            <option value="fb5f83a16212e2ceb1e2f8d463db63ce" >Nomer Telpon</option>
                                                        <?php elseif($cekkode_nomer_telpon != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_email == null ): ?>
                                                            <option value="de453e5363ec8fe6fd22a384b9706c9e" >Email</option>
                                                        <?php elseif($cekkode_email != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_social_facebook == null ): ?>
                                                            <option value="3fb2a72022fb65543404905367c03f8f" >Social Facebook</option>
                                                        <?php elseif($cekkode_social_facebook != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_social_instagram == null ): ?>
                                                            <option value="a3e99fbe206a5d254e855343a5283709" >Social Instagram</option>
                                                        <?php elseif($cekkode_social_instagram != null): ?>
                                                            
                                                        <?php endif; ?>

                                                        <?php if($cekkode_social_youtube == null ): ?>
                                                            <option value="df7f9da343369fa8346435ff41bc5062" >Social Youtube</option>
                                                        <?php elseif($cekkode_social_youtube != null): ?>
                                                            
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-3 col-form-label" for="exampleInputEmail1"><h6 style="color: black; font-weight:bold;font-size:13px;">MD5 Unik Code</h6></label>
                                                
                                                <div class="col-md-9">
                                                    <input type="text" name="" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="MD5 Otomatis Terbuat" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin:0px;">
                                                <label class="col-md-3 col-form-label" for=""><h6 style="color: black; font-weight:bold;font-size:13px;">Content Contact</h6></label>
                                                
                                                <div class="col-md-9">
                                                    <textarea name="content_contact" id="" style="width: 100%; padding:10px;" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
                        
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                

            </div>

            
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="">Nama Contact</th>
                                <th class="text-center">MD5 Unik Code</th>
                                <th class="text-center">Isi Contact</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                    <td style=""><?php echo e($d->name_contact); ?></td>
                                    <td class="text-center"><?php echo e($d->md5_unik_code); ?></td>
                                    <td class="text-center" style="width:50%;">
                                        <?php if($d->md5_unik_code == "0de562d7e944350816715e354eaf7a70"): ?>
                                            <span class="label label-info">Data Iframe Sudah Ada</span>
                                        <?php endif; ?>

                                        <?php if($d->md5_unik_code != "0de562d7e944350816715e354eaf7a70"): ?>
                                            <?php echo e($d->content_contact); ?>

                                        <?php endif; ?>

                                    
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('ct-contact.edit', $d->id)); ?>" class="btn btn-success btn-xs" style="margin: 3px;"><i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_judul_kata_pengantar == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Judul Kata Pengantar</td>
                                    <td><a href="#" data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_judul_kata_pengantar); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_kata_pengantar == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Kata Pengantar</td>
                                    <td><a href="#" data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_kata_pengantar); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_iframe_googlemaps == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Iframe Google Maps</td>
                                    <td><a href="# " data-toggle="tooltip" title="Ukuran Ideal Ifame Google : width: 100%; height: 500px;" data-placement="bottom"><?php echo e($md5_iframe_googlemaps); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_alamat_lengkap == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Alamat Lengkap</td>
                                    <td><a href="# " data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_alamat_lengkap); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_nomer_telpon == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Nomer Telpon</td>
                                    <td><a href="# " data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_nomer_telpon); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_email == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Email</td>
                                    <td><a href="# " data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_email); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_social_facebook == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Social Facebook</td>
                                    <td><a href="# " data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_social_facebook); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_social_instagram == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Social Instagram</td>
                                    <td><a href="# " data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_social_instagram); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>

                            <tr class="text-center" class="text-center" data-toggle="modal" data-target="#modal-create">
                                <?php if($cekkode_social_youtube == null): ?>
                                    <td class="text-center">-</td>
                                    <td class="text-left">Social Youtube</td>
                                    <td><a href="# " data-toggle="tooltip" title="Klik ini untuk mengisi data tersebut." data-placement="bottom"><?php echo e($md5_social_youtube); ?></a></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">-</td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                
            </div>
        
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('datatable'); ?>
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ulul-ilmi-project\resources\views/view_dashboard/ct_contact/ct-contact.blade.php ENDPATH**/ ?>