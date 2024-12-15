<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function posts(): View
    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function create(): View
    {
        $users = User::select('id', 'name')->get();

        return view('create', [
            'users' => $users
        ]);
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        Post::create($request->validated());

        return redirect('/')->with('success', 'Post created successfully');
    }

    public function edit($postId): View
    {
        $post = Post::findOrFail($postId);

        return view('edit', [
            'post' => $post
        ]);
    }

    public function update(UpdatePostRequest $request, $postId): RedirectResponse
    {
        $post = Post::findOrFail($postId);
        $post->update($request->validated());

        return redirect('/')->with('success', 'Post updated successfully');
    }

    public function delete($post)
    {

    }
}
