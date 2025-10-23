

<?php $__env->startSection('title', 'Profile Pengguna'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-6 py-8">
    <div class="bg-gray-900 p-8 rounded-lg shadow-md max-w-2xl mx-auto">

        <h1 class="text-3xl font-bold text-gray-100 mb-6">
            Profile Saya
        </h1>

        <div class="space-y-4">
            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Username</span>
                <span class="w-2/3 text-gray-100 font-semibold"><?php echo e($username); ?></span>
            </div>

            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Nama Lengkap</span>
                <span class="w-2/3 text-gray-100"><?php echo e(ucfirst($username)); ?></span>
            </div>
            
            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Email</span>
                <span class="w-2/3 text-gray-100"><?php echo e($username); ?>@gmail.com</span>
            </div>
            
            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Hak Akses</span>
                <span class="w-2/3 text-gray-100 font-medium text-green-600">Administrator</span>
            </div>
            
            <div class="flex py-2">
                <span class="w-1/3 text-gray-400 font-medium">Tanggal Bergabung</span>
                <span class="w-2/3 text-gray-100"><?php echo e(date('d F Y')); ?></span>
            </div>

        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laragon\www\UTS PR\resources\views/profile.blade.php ENDPATH**/ ?>