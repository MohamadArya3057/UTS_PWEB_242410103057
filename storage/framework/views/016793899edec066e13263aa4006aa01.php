<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['username']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['username']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<nav class="bg-gray-900 shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div>
                <a href="<?php echo e(route('dashboard', ['username' => $username])); ?>" class="text-xl font-bold text-gray-800">
                    Librarion
                </a>
            </div>
            <div class="flex items-center space-x-6">
                
                <a href="<?php echo e(route('dashboard', ['username' => $username])); ?>" 
                   class="text-gray-300 hover:text-blue-400 font-medium">
                   Dashboard
                </a>
                <a href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>" 
                   class="text-gray-300 hover:text-blue-400 font-medium">
                   Daftar Buku
                </a>
                <a href="<?php echo e(route('profile', ['username' => $username])); ?>" 
                   class="text-gray-300 hover:text-blue-400 font-medium">
                   Profile
                </a>
                <a href="<?php echo e(route('login')); ?>" 
                   class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow font-medium text-sm transition duration-200">
                   Logout
                </a>
            </div>
        </div>
    </div>
</nav>

<?php /**PATH C:\Laragon\www\UTS PR\resources\views/components/navbar.blade.php ENDPATH**/ ?>