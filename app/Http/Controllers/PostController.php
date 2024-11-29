<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function blog()
    {
        $posts = Post::all();
        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function single(int $id)
    {
        $post = Post::find($id);

        return view('singlePost', [
            'post' => $post
        ]);
    }
}
