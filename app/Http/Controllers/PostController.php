<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ { Post, Category};


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()

        ]);
    }

    public function show(Post $post)
    {
        return view('post.show',[
            'post' => $post
            ]);
    }

}
