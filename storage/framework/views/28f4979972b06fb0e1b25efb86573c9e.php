

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-white text-center">
                <h3>Admin Login</h3>
            </div>
            <div class="card-body">
                <?php if(session('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>
                <form action="<?php echo e(url('/admin/login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Login</button>
                </form>

                <div class="mt-3 text-center">
                    <a href="<?php echo e(url('/register/admin')); ?>">Don't have an account? Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/auth/admin_login.blade.php ENDPATH**/ ?>