

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">

        <div class="card">

            <div class="card-body bg-light">

                <h3 class="text-primary">
                    Halo, Selamat datang User <?php echo e(Auth::user()->nama); ?>

                </h3>

                <p>Ini adalah halaman Home</p>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Software\XAMPP\htdocs\Praktikum_Web2_Laravel\resources\views/home.blade.php ENDPATH**/ ?>