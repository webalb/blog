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
            'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString()

        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post' => $post
            ]);
    }

}
