<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" =>"Home",
            "Home" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view ('post',[
            "title" => "Book Detail",
            "post" => $post
        ]);
    } 
}
