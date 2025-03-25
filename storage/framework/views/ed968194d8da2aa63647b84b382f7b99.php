

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Welcome to Admin Dashboard, <?php echo e(auth()->user()->first_name); ?>!</h2>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>