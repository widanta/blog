<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Singgle Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
