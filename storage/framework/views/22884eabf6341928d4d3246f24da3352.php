

<?php $__env->startSection('title', 'Daftar Buku'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold text-gray-100 mb-6">Daftar Buku</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-gray-900 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                
                <img src="<?php echo e($item['foto']); ?>" 
                     alt="Cover buku <?php echo e($item['judul']); ?>" 
                     class="w-full h-100 object-cover bg-gray-700">
                
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-100">
                        <?php echo e($item['judul']); ?>

                    </h3>
                    <p class="text-sm text-gray-300 mt-1">
                        oleh <?php echo e($item['penulis']); ?>

                    </p>
                    <span class="mt-3 inline-block bg-blue-900 text-blue-200 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                        Stok: <?php echo e($item['stok']); ?>

                    </span>
                </div>
                
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laragon\www\UTS PR\resources\views/pengelolaan.blade.php ENDPATH**/ ?>