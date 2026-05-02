<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function create(){
        return view('posts.create');
    }

        public function store(Request $request){
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();

            session()->flash('status','Post created! :)');
            return to_route('posts.index');
    }
}
