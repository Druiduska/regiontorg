<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Posts\PostsRequest;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  response()
                ->json(Post::select('id', 'title', 'article')->orderByDesc('created_at')->get()->toArray());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $post=new Post;
        $post->title=$request->title;
        $post->article=$request->article;
        $post->save();
    }


    /**
     * @param PostsRequest $request
     * @param  int  $id
     */
    public function update(PostsRequest $request, $id)
    {
        $post=Post::find($id);
        $post->title=$request->title;
        $post->article=$request->article;
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }
}
