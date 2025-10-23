<footer class="bg-gray-900 mt-auto">
    <div class="container mx-auto px-6 py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold text-white mb-2">Librarion</h3>
                <p class="text-gray-300">
                    Platform manajemen perpustakaan untuk mengelola koleksi buku Anda dengan mudah.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-200 mb-2">Fitur Utama</h3>
                <ul class="space-y-1">
                    <li><a href="<?php echo e(route('dashboard', ['username' => $username ?? 'Guest'])); ?>" class="text-gray-600 hover:text-blue-600">Dashboard</a></li>
                    <li><a href="<?php echo e(route('pengelolaan', ['username' => $username ?? 'Guest'])); ?>" class="text-gray-600 hover:text-blue-600">Daftar Buku</a></li>
                    <li><a href="<?php echo e(route('profile', ['username' => $username ?? 'Guest'])); ?>" class="text-gray-600 hover:text-blue-600">Profil</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-gray-200 mb-2">Legal</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Kebijakan Privasi</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-8 pt-4 border-t border-gray-700 text-center">
            <p class="text-gray-400 text-sm">
                &copy; <?php echo e(date('Y')); ?> Librarion.
            </p>
        </div>

    </div>

    <button id="to-top-button" title="Kembali ke atas"
            class="hidden fixed bottom-5 right-5 z-50 p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v10.586l3.293-3.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L9 14.586V4a1 1 0 011-1z" clip-rule="evenodd" transform="rotate(180 10 10)" />
        </svg>
    </button>
    
    <script>
   
    </script>
</footer>

<?php /**PATH C:\Laragon\www\UTS PR\resources\views/components/footer.blade.php ENDPATH**/ ?>