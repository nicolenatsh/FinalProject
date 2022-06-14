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
    <div class="container">
    <div class="row justify-content">
        <div class="col-md-12 mb-5">
            <img src="<?php echo e(url('images/logo.png')); ?>" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card">
              <img class="frame" src="<?php echo e(url('uploads')); ?>/<?php echo e($barang->gambar); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo e($barang->nama_barang); ?></h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. <?php echo e(number_format($barang->harga)); ?> <br>
                    <strong>Stok :</strong> <?php echo e($barang->stok); ?> <br>
                    <hr>
                    <strong>Keterangan :</strong> <?php echo e($barang->keterangan); ?>

                </p>
              <div class="flex items-center">
              <br><a href="<?php echo e(url('pesan')); ?>/<?php echo e($barang->id); ?>" class="inline-flex items-center button">Pesan</a>
              </div>
              </div>
            </div> 
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FinalProject\resources\views/dashboard.blade.php ENDPATH**/ ?>