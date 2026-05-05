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

    public function show(Post $post){
        return view('posts.show',['post'=>$post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

            $request->validate([
                'title'=>['required','min:4'],
                'body'=>['required']
            ]);
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();

            session()->flash('status','Post created! :)');
            return to_route('posts.index');
    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Post $post){
        return 'Edit post';
    }
}
