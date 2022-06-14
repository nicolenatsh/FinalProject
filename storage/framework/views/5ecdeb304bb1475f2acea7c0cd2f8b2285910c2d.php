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
        <a href="<?php echo e(url('history')); ?>" class="inline-flex items-center text-sm font-medium bread">Histori</a>
      </div>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="#B26B00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="inline-flex items-center text-sm font-medium bread">Detail Pesanan</a>
      </div>
    </li>
    </ol>
    </nav>
</div>

    <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <hr><h3 class="header"> Detail Pesanan</h3><hr>
                    <?php if(!empty($pesanan)): ?>
                    <p align="right">Tanggal Pesan : <?php echo e($pesanan->tanggal); ?></p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $pesanan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td>
                                    <img class="center" src="<?php echo e(url('uploads')); ?>/<?php echo e($pesanan_detail->barang->gambar); ?>" width="100" alt="...">
                                </td>
                                <td><?php echo e($pesanan_detail->barang->nama_barang); ?></td>
                                <td><?php echo e($pesanan_detail->jumlah); ?> pcs</td>
                                <td align="right">Rp. <?php echo e(number_format($pesanan_detail->barang->harga)); ?></td>
                                <td align="right">Rp. <?php echo e(number_format($pesanan_detail->jumlah_harga)); ?></td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></td>
                                
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                <td align="right"><strong><?php echo e($pesanan->kode); ?></strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <?php endif; ?>
                    <hr><p>Silahkan Lanjutkan pembayaran melalui 
                    <strong>Bank Mandiri (10911029993) </strong>dengan nominal 
                    <strong>Rp. <?php echo e(number_format($pesanan->kode+$pesanan->jumlah_harga)); ?></strong>. 
                    Lampirkan kode unik saat pembayaran.</p></div><hr>
                </div>
            </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FinalProject\resources\views/historydetail.blade.php ENDPATH**/ ?>