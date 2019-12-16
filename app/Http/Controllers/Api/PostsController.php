<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PostsResource;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get posts
        $posts = Post::paginate(10);

        // Return a collection of posts as a resouce
        return PostsResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Check if update or create new post
       $post = $request->isMethod('put')? Post::findOrFail($request->post_id) : new Post;

       $post->id = $request->input('post_id');
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->cover_image = 'noimage.jpg';
       $post->user_id = $request->input('user_id');

       if($post->save()) {
           return new PostsResource($post);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get post
        $post = Post::findOrFail($id);

        // Return single post
        return new PostsResource($post);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get post
        $post = Post::findOrFail($id);

        if($post->delete()) {
            return new PostsResource($post);
        }
    }
}
