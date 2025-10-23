<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Librarion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-black">
    <div class="flex items-center justify-center min-h-screen">
        
        <div class="w-full max-w-md p-8 space-y-6 bg-gray-900 rounded-xl shadow-lg">
            <h1 class="text-3xl font-bold text-center text-white">
                Librarion
            </h1>
            <p class="text-center text-gray-400">
                Silakan login untuk melanjutkan
            </p>

            <form action="{{ route('login.handle') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">
                        Username
                    </label>
                    <input type="text" id="username" name="username" 
                           class="mt-1 block w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Masukkan username" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <input type="password" id="password" name="password" 
                           class="mt-1 block w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Masukkan password" required>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
                        Login
                    </button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>

