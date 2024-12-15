@extends('layouts.app')

@section('title', 'Edit post')

@section('content')
    <h1 class="text-4xl font-bold text-neutral-900 mb-8">Edit an existing post</h1>

    <form action="/posts/{{ $post->id }}" method="POST" class="bg-white p-4 rounded-2xl shadow">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Title" class="@error('title') error @enderror"
            value="{{ old('title', $post->title) }}">
        @error('title')
            <p class="error mt-2">{{ $message }}</p>
        @enderror

        <label for="content" class="mt-4">Content</label>
        <textarea name="content" id="content" class="min-h-64 @error('content') error @enderror" placeholder="Content">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <p class="error mt-2">{{ $message }}</p>
        @enderror

        <button type="submit" class="mt-4 py-3">Edit post</button>
        <button type="button" onclick="window.location.href='/'" class="mt-2 py-3 btn-ghost">Cancel</button>
    </form>
@endsection
