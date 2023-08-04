<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('posts')->get();
        return view('posts', [
            "title" => "All Blog",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category']))->get(),
            'categories'=>$categories,

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Blog",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
