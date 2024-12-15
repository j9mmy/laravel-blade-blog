<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
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

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|exists:users,id'
        ], [], [
            'user_id' => 'user'
        ]);

        Post::create($validated);

        return redirect('/')->with('success', 'Post created successfully');
    }

    public function edit($post)
    {

    }

    public function update($post)
    {

    }

    public function delete($post)
    {

    }
}
