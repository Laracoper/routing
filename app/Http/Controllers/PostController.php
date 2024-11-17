<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Http;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Response;

class PostController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function posts()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    // public function post($post){
    //     $post = Post::find($post);
    //     return view('post',compact('post'));
    // }

    public function post(Post $post)
    {

        return view('post', compact('post'));
    }

    public function slug($name)
    {


        return view('slug', compact('name'));
    }
}
