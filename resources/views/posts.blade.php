@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 class="text-4xl font-bold text-neutral-900 mb-8">Home</h1>

    <div class="grid gap-4 md:grid-cols-2">
        @foreach ($posts as $post)
            <article
                class="flex flex-col bg-white rounded-2xl shadow-sm hover:shadow-md transition-all ease-in-out p-4 border border-neutral-100">
                <h2 class="text-xl font-bold text-neutral-800 mb-2">{{ $post->title }}</h2>
                <p class="text-sm text-neutral-600 mb-4 ">
                    By {{ $post->user->name }} - {{ $post->created_at->format('d-m-Y') }}
                </p>
                <p class="text-neutral-700">{{ $post->content }}</p>

                <div class="flex gap-2 mt-4 justify-end items-end h-full text-sm">
                    <button class="w-fit h-fit btn-ghost" onclick="window.location.href='/posts/{{ $post->id }}/edit'">
                        Edit
                    </button>
                    <form action="/posts/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-fit h-fit btn-destructive bg-white text-neutral-900">
                            Delete
                        </button>
                    </form>
                </div>

            </article>
        @endforeach
    </div>
@endsection
