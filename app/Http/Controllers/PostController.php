<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    private $postservice;
    private $model = 'Post';

    public function __construct(PostService $service)
    {
        $this->postservice = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all(['id', 'name']);
        $posts = Post::paginate(15);
        return view('dashboard.posts.filter',['posts'=>$posts,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        $post = New Post;
        $name = 'New';
        $post->category_ids = [];
        return view('dashboard.posts.create',['post'=>$post,'name' => $name,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $post = $this->postservice->store($data);
        // Alert::success('Success Title', 'STD Clinic was created successfully!');
        return redirect()->route('post.show', [$post])->with('success', 'Post was created successfully!');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::all(['id', 'name']);
        $name = $post->name;
        $post->category_ids = $post->categories()->pluck('categories.id')->toArray();
        return view('dashboard.posts.view', ['post'=>$post,'name' => $name,'categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
