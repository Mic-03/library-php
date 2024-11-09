

<?php $__env->startSection('title', 'CD Catalog'); ?>

<?php $__env->startSection('content'); ?>
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <h3 class="text-center">CD Catalog</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $cds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($cd->title); ?></td>
                        <td><?php echo e($cd->artist); ?></td>
                        <td><?php echo e($cd->genre); ?></td>
                        <td><?php echo e("Rp " . number_format($cd->price, 2, ',', '.')); ?></td>
                        <td><?php echo e($cd->stock); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center">No CDs available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\laravel12\resources\views/cds/index.blade.php ENDPATH**/ ?>