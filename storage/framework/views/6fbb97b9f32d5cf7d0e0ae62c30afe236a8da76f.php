

<?php $__env->startSection('title', 'Data Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4 mb-5">

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Data Mahasiswa</h5>
                <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-light btn-sm">
                    + Tambah Data
                </a>
            </div>

            <div class="card-body">

                <form action="<?php echo e(route('mahasiswa.index')); ?>" method="GET" class="row g-2 mb-3">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Cari NIM atau Nama..."
                            value="<?php echo e(old('search')); ?>">
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">
                            Cari
                        </button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
                                <th class="text-center" style="width: 200px;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration + ($datas->currentPage() - 1) * $datas->perPage()); ?></td>
                                    <td><?php echo e($item->nim); ?></td>
                                    <td><?php echo e($item->nama); ?></td>
                                    <td><?php echo e($item->jenis_kelamin); ?></td>
                                    <td><?php echo e($item->jurusan); ?></td>

                                    <td class="text-center">
                                        <a href="<?php echo e(route('mahasiswa.show', $item->id)); ?>" class="btn btn-info btn-sm">
                                            Lihat
                                        </a>

                                        <a href="<?php echo e(route('mahasiswa.edit', $item->id)); ?>" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="<?php echo e(route('mahasiswa.delete', $item->id)); ?>" method="POST" class="d-inline"
                                            onsubmit="return confirm('Hapus data?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Data tidak ditemukan.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    <?php echo e($datas->links()); ?>

                </div>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Software\XAMPP\htdocs\Praktikum_Web2_Laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>