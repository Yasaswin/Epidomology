<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Category;
use App\Services\MenuService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMenu;
use App\Http\Requests\UpdateMenu;

class MenuController extends Controller
{
    private $menuservice;
    private $model = 'Menu';

    public function __construct(MenuService $service)
    {
        $this->menuservice = $service;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::paginate(15);

        return view('dashboard.menus.filter',['menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all(['id', 'title_en']);
        $menu = New Menu;
        $categories = Category::all(['id', 'name']);
        $menus = Menu::all(['id', 'name_en']);
        $name = 'New';

        return view('dashboard.menus.create',['menu'=>$menu,'menus'=>$menus,'name' => $name,'categories'=>$categories,'pages'=>$pages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenu $request)
    {
        $menu = $this->menuservice->store($request);
        // Alert::success('Success Title', 'Menu was created successfully!');
        return redirect()->route('menu.show', [$menu])->with('success', 'Menu was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $pages = Page::all(['id', 'title_en']);
        $categories = Category::all(['id', 'name']);
        $menus = Menu::all(['id', 'name_en']);
        $name = $menu->name;
        return view('dashboard.menus.view',['menu'=>$menu,'menus'=>$menus,'name' => $name,'categories'=>$categories,'pages'=>$pages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $pages = Page::all(['id', 'title_en']);
        $categories = Category::all(['id', 'name']);
        $menus = Menu::all(['id', 'name_en']);
        $name = $menu->name;
        return view('dashboard.menus.edit',['menu'=>$menu,'menus'=>$menus,'name' => $name,'categories'=>$categories,'pages'=>$pages]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenu $request, Menu $menu)
    {
        $menu = $this->menuservice->update( $menu, $request );
        // Alert::success('Success Title', 'Page was updated successfully!');
        return redirect()->route('menu.show', [$menu])->with('success', 'Page was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
