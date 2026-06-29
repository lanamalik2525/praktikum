<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-4 m-auto" style="width: 50%;">
                <div class="card-body">

                    <div class="text-center">
                        <h3>Selamat Datang di aplikasi praktikum web 2</h3>
                        <p>Silahkan Login dengan username dan password anda</p>
                    </div>

                    <div class="form mt-4">

                        @session('success')
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        @endsession

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('auth.loginStore')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="form-group mt-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control"
                                    placeholder="Silahkan masukan username anda">

                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Silahkan masukan password anda">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group float-end mt-3">
                                <a href="<?php echo e(route('auth.registerView')); ?>" class="btn btn-success">
                                    Register
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Software\XAMPP\htdocs\Praktikum_Web2_Laravel\resources\views/welcome.blade.php ENDPATH**/ ?>