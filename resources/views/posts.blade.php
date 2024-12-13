<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen py-12 px-4">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Posts</h1>

        <div class="grid gap-6 md:grid-cols-2">
            @foreach ($posts as $post)
                <article class="bg-white rounded-lg shadow-sm hover:shadow-md transition-all ease-in-out p-6 border border-gray-100">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>
                    <p class="text-sm text-gray-600 mb-4">By {{ $post->user->name }}</p>
                    <p class="text-gray-700">{{ $post->content }}</p>
                </article>
            @endforeach
        </div>
    </div>
</body>
</html>