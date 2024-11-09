

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h3 class="text-center">CD Collection</h3>
    <a href="?sort=<?php echo e($sort === 'asc' ? 'desc' : 'asc'); ?>" class="btn btn-secondary">
        Sort by Title (<?php echo e($sort === 'asc' ? 'Ascending' : 'Descending'); ?>)
    </a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cd->title); ?></td>
                    <td><?php echo e($cd->artist); ?></td>
                    <td><?php echo e($cd->genre); ?></td>
                    <td><?php echo e("Rp " . number_format($cd->price,2,',','.')); ?></td>
                    <td><?php echo e($cd->stock); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($cds->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\laravel12\resources\views\cds\index.blade.php ENDPATH**/ ?>