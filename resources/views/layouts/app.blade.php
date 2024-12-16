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

    <nav class="p-3 fixed top-0 left-0 right-0">
        <div
            class="max-w-7xl mx-auto flex gap-1 font-semibold bg-neutral-200 bg-opacity-50 backdrop-blur-sm w-fit rounded-full p-2">
            <a href="/" class="btn-icon rounded-full w-10 h-10 flex items-center justify-center">
                <div class="w-5 h-5">
                    <i data-lucide="home" class="w-5 h-5"></i>
                </div>
            </a>
            <a href="/create" class="btn-icon rounded-full w-10 h-10 flex items-center justify-center">
                <div class="w-5 h-5">
                    <i data-lucide="plus" class="w-5 h-5"></i>
                </div>
            </a>
        </div>
    </nav>

    <main class="py-20 px-4 max-w-5xl mx-auto">
        @yield('content')
    </main>

    <script>
        lucide.createIcons();
    </script>

</body>

</html>
