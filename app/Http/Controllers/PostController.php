<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view("posts.index")->with('posts', $post->paginateByLimit());

    }

    public function show(Post $post)
    {
        return view("posts.show")->with('post', $post);


    }
}
