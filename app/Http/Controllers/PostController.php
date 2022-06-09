<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\PostImage;
use App\Models\PostPdf;
use App\Models\PostVideo;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $postservice;
    private $model = 'Post';
    private $uid;


    public function __construct(PostService $service)
    {
        $this->postservice = $service;
        $this->middleware(function ($request, $next) {
            $this->uid = Auth::id() ?? null;
            return $next($request);
        });

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
        $images = $post->images;
        $pdfs = $post->pdfs;
        $vedios = $post->vedios;
        $name = 'New';
        $post->category_ids = [];
        return view('dashboard.posts.create',['post'=>$post,'name' => $name,'categories'=>$categories,'images'=>$images,'pdfs'=>$pdfs,'vedios'=>$vedios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        // $data = $request->all();
        $post = $this->postservice->store($request,$this->uid);

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
        $images = $post->images;
        $name = $post->name;
        $post->category_ids = $post->categories()->pluck('categories.id')->toArray();
        return view('dashboard.posts.view', ['post'=>$post,'name' => $name,'categories'=>$categories,'images'=>$images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all(['id', 'name']);
        $name = $post->title;
        $images = $post->images;
        $post->category_ids = $post->categories()->pluck('categories.id')->toArray();
        return view('dashboard.posts.edit', ['post'=>$post,'name' => $name,'categories'=>$categories,'images'=>$images]);
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

        $post = $this->postservice->update( $post, $request,$this->uid );
            // Alert::success('Success Title', 'Subpopulation was updated successfully!');
            return redirect()->route('post.show', [$post])->with('success', 'Post was updated successfully!');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroyImage($id)
    {
        $image = PostImage::find($id);
        Storage::disk('local')->delete('post/images'.$image->image);
        $image->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroyPdf($id)
    {

        $pdf = PostPdf::find($id);
        Storage::disk('local')->delete('post/pdfs'.$pdf->pdf);
        $pdf->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroyVideo($id)
    {
        //$this->authorize('manage', $PostPdf);

        $video = PostVideo::find($id);
        $video->delete();

        // Flash alert message
        session()->flash('post_update', 'Post updated.');

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);


    }

}
