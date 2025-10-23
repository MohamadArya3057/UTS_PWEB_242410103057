

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-6 py-8">
    <div class="bg-gray-900 p-6 rounded-lg shadow-md">

        <h1 class="text-3xl font-bold text-white">
            Selamat datang, <?php echo e($username); ?>!
        </h1>
        
        <p class="mt-2 text-gray-300">
        </p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-6 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-blue-400">Total Judul Buku</h3>
                <p class="text-3xl font-bold text-blue-300 mt-2">4</p>
                <p class="text-sm text-blue-500 mt-1"></p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-green-400">Total Stok Buku</h3>
                <p class="text-3xl font-bold text-green-300 mt-2">38</p>
                 <p class="text-sm text-green-500 mt-1"></p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-yellow-400">Anggota Terdaftar</h3>
                <p class="text-3xl font-bold text-yellow-300 mt-2">1 (Anda)</p>
                 <p class="text-sm text-yellow-500 mt-1"></p>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laragon\www\UTS PR\resources\views/dashboard.blade.php ENDPATH**/ ?>