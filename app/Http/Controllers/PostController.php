<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){

        $posts = Post::get();

        return view('posts',compact('posts'));       

    }

    public function post(Request $request){
        Post::create($request->all());
        
    }
}
