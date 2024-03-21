<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }
     //
    public function create()
    {
        return view('posts.create');
    }
     //
    public function show($post)
    {
        //pasar variables a la vista
        return view('posts.show',[
            'post' => $post
        ]);
        
        //compact('post');['post' => $post]
        //solo esto**return view ('posts.show', compact('post'));**
        
    }
     //
    public function update()
    {
        return "primer post";
    }
     //
    public function delete()
    {
        return "primer post";
    }
}
