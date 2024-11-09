

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h3 class="text-center">Library Catalogue</h3>
    <hr>

    <!-- Links for each category -->
    <div class="d-flex justify-content-center">
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary mx-1">Books</a>
        <a href="<?php echo e(route('cds.index')); ?>" class="btn btn-primary mx-1">CDs</a>
        <a href="<?php echo e(route('newspapers.index')); ?>" class="btn btn-primary mx-1">Newspapers</a>
        <a href="<?php echo e(route('fyps.index')); ?>" class="btn btn-primary mx-1">FYPs</a>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\laravel12\resources\views\catalogue.blade.php ENDPATH**/ ?>