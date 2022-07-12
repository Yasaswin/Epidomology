<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Layout;
use App\Models\Category;
use App\Models\Notice;
use Illuminate\Http\Request;
use App\Services\PageService;
use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use App\Models\PostImage;

class PageController extends Controller
{
    private $pageservice;
    private $model = 'Page';

    public function __construct(PageService $service)
    {
        $this->pageservice = $service;

    }

    public function viewPage(Page $page){

        return view($page->layout->layout, ['page'=>$page]);
    }

    public function showEvent(Post $event){

        $images = $event->images;

        // dd($event);
        return view('layouts.front.pages.eventsingle', ['event'=>$event,'images'=>$images]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(15);
        return view('dashboard.pages.filter',['pages'=>$pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layouts = Layout::all(['id', 'name']);
        $categories = Category::all(['id', 'name']);
        $notices = Notice::all(['id', 'name']);
        $page = New Page;
        $name = 'New';
        return view('dashboard.pages.create',['page'=>$page,'name' => $name,'layouts'=>$layouts,'categories'=>$categories,'notices'=>$notices]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePage $request)
    {
        $page = $this->pageservice->store($request);

        // Alert::success('Success Title', 'Page was created successfully!');
        return redirect()->route('page.show', [$page])->with('success', 'Page was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $layouts = Layout::all(['id', 'name']);
        $categories = Category::all(['id', 'name']);
        $notices = Notice::all(['id', 'name']);
        $name = $page->title;
        return view('dashboard.pages.view',['page'=>$page,'name' => $name,'layouts'=>$layouts,'categories'=>$categories,'notices'=>$notices]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $layouts = Layout::all(['id', 'name']);
        $categories = Category::all(['id', 'name']);
        $notices = Notice::all(['id', 'name']);
        $name = $page->title;
        return view('dashboard.pages.edit',['page'=>$page,'name' => $name,'layouts'=>$layouts,'categories'=>$categories,'notices'=>$notices]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePage $request, Page $page)
    {
        $page = $this->pageservice->update( $page, $request );
        // Alert::success('Success Title', 'Page was updated successfully!');
        return redirect()->route('page.show', [$page])->with('success', 'Page was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
