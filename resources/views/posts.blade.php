@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 class="text-4xl font-bold text-neutral-900 mb-8">Home</h1>

    <div class="grid gap-4 md:grid-cols-2">
        @foreach ($posts as $post)
            <article
                class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-all ease-in-out p-4 border border-neutral-100">
                <h2 class="text-xl font-bold text-neutral-800 mb-2">{{ $post->title }}</h2>
                <p class="text-sm text-neutral-600 mb-4 ">By {{ $post->user->name }}</p>
                <p class="text-neutral-700">{{ $post->content }}</p>
            </article>
        @endforeach
    </div>
@endsection
