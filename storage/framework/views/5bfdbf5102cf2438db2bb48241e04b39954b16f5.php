

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">

        <div class="card">

            <div class="card-body">

                <div class="table">

                    <div class="row">

                        <div class="col">
                            <h3>Profile User</h3>
                        </div>

                        <div class="col">
                            <div class="float-end">
                                <a href="<?php echo e(route('home')); ?>" class="btn btn-light">
                                    Kembali
                                </a>
                            </div>
                        </div>

                    </div>

                    <table class="table">

                        <tr>
                            <td width="20%">Nama</td>
                            <td width="1%">:</td>
                            <td><?php echo e($profile->nama); ?></td>
                        </tr>

                        <tr>
                            <td width="20%">Username</td>
                            <td width="1%">:</td>
                            <td><?php echo e($profile->username); ?></td>
                        </tr>

                        <tr>
                            <td width="20%">Tanggal Register</td>
                            <td width="1%">:</td>
                            <td><?php echo e($profile->created_at); ?></td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Software\XAMPP\htdocs\Praktikum_Web2_Laravel\resources\views/profile.blade.php ENDPATH**/ ?>