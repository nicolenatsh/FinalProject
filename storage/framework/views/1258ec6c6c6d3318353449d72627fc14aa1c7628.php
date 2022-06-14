<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 

<!-- breadcrumb -->
<div class="container">
<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="<?php echo e(url('dashboard')); ?>" class="inline-flex items-center text-sm font-medium bread">
        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Halaman Utama</a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="#B26B00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="inline-flex items-center text-sm font-medium bread">Pesan Produk</a>
      </div>
    </li>
    </ol>
    </nav>
</div>

<!-- detail produk -->
        <div>
            <hr><h1 class="header">Pesan Produk</h1><hr><br>
        </div>
    <div class="row">
        <div class="col-md-6">
            <h3 align="center"><?php echo e($barang->nama_barang); ?></h3>
            <img src="<?php echo e(url('uploads')); ?>/<?php echo e($barang->gambar); ?>" class="rounded mx-auto d-block" width="25%" alt=""> 
        </div>
        <div class="col-md-6">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                         <td>Rp. <?php echo e(number_format($barang->harga)); ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td><?php echo e(number_format($barang->stok)); ?></td>
                    </tr>
                        <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?php echo e($barang->keterangan); ?></td>
                    </tr>
                                   
                    <tr>
                        <td>Jumlah Pesan</td>
                        <td>:</td>
                        <td>
                         <form method="post" action="<?php echo e(url('pesan')); ?>/<?php echo e($barang->id); ?>" >
                            <?php echo csrf_field(); ?>
                            <input type="text" name="jumlah_pesan" class="form-control" required="">
                            <p align="right">
                                <br><button type="submit" class="button"></i> Masukkan Keranjang</button>
                            </p>
                         </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FinalProject\resources\views/index.blade.php ENDPATH**/ ?>