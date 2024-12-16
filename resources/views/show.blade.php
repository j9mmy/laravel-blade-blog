@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="bg-white p-4 rounded-2xl shadow">
        <h1 class="text-4xl font-bold text-neutral-900 mb-2">{{ $post->title }}</h1>
        <p class=" text-neutral-600">
            By {{ $post->user->name }} — published: {{ $post->created_at->format('d/m/Y H:i') }}
            @if ($post->created_at != $post->updated_at)
                — last updated: {{ $post->updated_at->format('d/m/Y H:i') }}
            @endif
        </p>

        <hr class="my-4">

        <div class="text-neutral-700">{!! nl2br(e($post->content)) !!}</div>
    </article>
@endsection
