<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>

<body class="bg-neutral-50 min-h-screen">

    <nav class="p-4 fixed top-0 left-0 right-0">
        <div
            class="max-w-7xl mx-auto flex gap-2 font-semibold bg-white bg-opacity-80 backdrop-blur-sm w-fit rounded-full p-2">
            <a href="/" class="btn-icon rounded-full w-12 h-12 flex items-center justify-center">
                <div class="w-6 h-6">
                    <i data-lucide="home"></i>
                </div>
            </a>
            <a href="/create" class="btn-icon rounded-full w-12 h-12 flex items-center justify-center">
                <div class="w-6 h-6">
                    <i data-lucide="plus"></i>
                </div>
            </a>
        </div>
    </nav>

    <main class="py-24 px-4 max-w-5xl mx-auto">
        @yield('content')
    </main>

    <script>
        lucide.createIcons();
    </script>

</body>

</html>
