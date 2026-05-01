<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post; 
class PostController extends Controller


{
    public function index(){
        $posts= Post::get();
        return view('posts.index',['posts'=>$posts]);
    }

    public function show(Post $postid){
        return view('posts.show',['post'=>$postid]);
    }
}
