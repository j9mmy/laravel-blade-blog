@extends('layouts.app')

@section('title', 'Create post')

@section('content')
    <h1 class="text-4xl font-bold text-neutral-900 mb-8">Create a new post</h1>

    <form action="/create" method="POST" class="bg-white p-4 rounded-2xl shadow">
        @csrf
        <label for="user_id">User</label>
        <select name="user_id" id="user_id" class="@error('user_id') error @enderror">
            <option value="" disabled selected>Select a user</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        @error('user_id')
            <p class="error mt-2">{{ $message }}</p>
        @enderror

        <label for="title" class="mt-4">Title</label>
        <input type="text" name="title" id="title" placeholder="Title" class="@error('title') error @enderror"
            value="{{ old('title') }}">
        @error('title')
            <p class="error mt-2">{{ $message }}</p>
        @enderror

        <label for="content" class="mt-4">Content</label>
        <textarea name="content" id="content" class="min-h-64 @error('content') error @enderror" placeholder="Content">{{ old('content') }}</textarea>
        @error('content')
            <p class="error mt-2">{{ $message }}</p>
        @enderror

        <button type="submit" class="mt-4 py-3">Create post</button>
        <button type="button" onclick="window.location.href='/'" class="mt-2 py-3 btn-ghost">Cancel</button>
    </form>
@endsection
