<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
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
        return view('posts.create',['post'=>new Post]);
    }

    public function store(SavePostRequest $request){


            Post::create($request->validated());

            return to_route('posts.index')->with('status', __('Post created!'));
    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }

    public function update(SavePostRequest $request, $post){

            $post = Post::find($post);            // $post->title = $request->input('title');
            $post->update($request->validated());

            return to_route('posts.show', $post)->with('status',__('Post updated!'));
    }
}
