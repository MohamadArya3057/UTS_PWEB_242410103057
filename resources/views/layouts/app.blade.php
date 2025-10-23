<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Librarion') - Librarion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<body class="flex flex-col min-h-screen bg-black font-inter text-gray-300">

    @hasSection('login-page')
        <main class="flex-grow">
            @yield('content')
        </main>
    @else
        <header class="bg-gray-900 shadow-sm">
            <x-navbar :username="$username ?? 'Guest'" />
        </header>

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer')

    @endif

</body>
</html>

