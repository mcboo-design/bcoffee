

<?php $__env->startSection('title', 'Ubah Data Produk'); ?>

<?php $__env->startSection('content'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Produk</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.produk.index')); ?>">Produk</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="">
                        <h4 class="card-title">Ubah Produk <b class="text-primary"><?php echo e($produk['nama_produk']); ?></b></h4>
                        <p class="card-title-desc">
                            Ubah data produk pada BCoffee.
                        </p>
                    </div>
                    <div class="ms-auto">
                        <a class="btn btn-light" href="<?php echo e(route('admin.produk.index')); ?>"><i class="bx bx-arrow-back"></i> Kembali</a>
                    </div>
                </div>

                <?php if(session('status')): ?>
                    <div class="alert alert-success mb-1 mt-1">
                    <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('admin.produk.update', $produk['id'])); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-xl-12">
                            
                            <div class="row">
                                <div class="col-lg-7">
                                    <label for="nama-produk">Nama Produk</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['nama_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Masukkan nama produk" name="nama_produk" id="nama-produk" value="<?php echo e($produk['nama_produk']); ?>">
                                    <?php $__errorArgs = ['nama_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger mt-2 mb-2"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-lg-3 mt-3 mt-lg-0">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Masukkan harga" name="harga" id="harga" value="<?php echo e($produk['harga']); ?>">
                                    <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger mt-2 mb-2"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-lg-2 mt-3 mt-lg-0">
                                    <label for="tampilkan">Tampilkan</label>
                                    <select name="tampilkan" id="" class="form-select <?php $__errorArgs = ['tampilkan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                    <?php $__errorArgs = ['tampilkan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger mt-2 mb-2"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-lg-7 mt-3">
                                    <label for="jenis">Pilih Jenis</label>
                                    <select name="jenis" class="form-select" id="jenis">
                                        <option value="" selected disabled>Pilih data</option>
                                        <?php $__currentLoopData = $jenisProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item['jenis']); ?>" <?php echo e($item['jenis'] == $produk['jenis'] ? 'selected' : ''); ?>><?php echo e($item['jenis']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger mt-2 mb-2"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-lg-5 mt-3">
                                    <label for="foto">Foto</label>
                                    <div class="d-flex gap-3">
                                        <div class="rounded overflow-hidden" style="width: 39px">
                                            <a href="<?php echo e(asset('storage/'.$produk['foto'])); ?>" target="_blank">
                                                <img src="<?php echo e(asset('storage/'.$produk['foto'])); ?>" alt="" class="img-fluid rounded">
                                            </a>
                                        </div>
                                        <small class="text-center">Current Image</small>
                                        <div class="w-100">
                                            <input type="file" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="foto" id="foto">
                                            <small>Ukuran Maksimal 7.5Mb, pastikan foto tidak memiliki background.</small>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger mt-2 mb-2"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
    
                            <div class="d-flex mt-3">
                                <button class="btn btn-primary ms-auto" type="submit">Ubah</button>
                            </div>
    
                        </div>
                    </div>
                </form>

            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\bcoffee\resources\views/admin/produk/edit.blade.php ENDPATH**/ ?>