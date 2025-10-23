@props(['username'])

<nav class="bg-gray-900 shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div>
                <a href="{{ route('dashboard', ['username' => $username]) }}" class="text-xl font-bold text-gray-800">
                    Librarion
                </a>
            </div>
            <div class="flex items-center space-x-6">
                {{-- 
                  Setiap link navigasi membawa query param 'username'
                  agar username tetap ada saat berpindah halaman
                --}}
                <a href="{{ route('dashboard', ['username' => $username]) }}" 
                   class="text-gray-300 hover:text-blue-400 font-medium">
                   Dashboard
                </a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
                   class="text-gray-300 hover:text-blue-400 font-medium">
                   Daftar Buku
                </a>
                <a href="{{ route('profile', ['username' => $username]) }}" 
                   class="text-gray-300 hover:text-blue-400 font-medium">
                   Profile
                </a>
                <a href="{{ route('login') }}" 
                   class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow font-medium text-sm transition duration-200">
                   Logout
                </a>
            </div>
        </div>
    </div>
</nav>

