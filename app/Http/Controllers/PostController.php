<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() 
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function create()
    {

    }

    public function store()
    {

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
