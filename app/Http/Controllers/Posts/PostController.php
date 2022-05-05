<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function post_show(){
        return view('posts.post_show');
    }
    public function post_create(){
        return view('posts.create_post');
    }
}
