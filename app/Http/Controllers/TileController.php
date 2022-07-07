<?php

namespace App\Http\Controllers;

use App\Models\Tile;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Services\TileService;
use App\Http\Requests\StoreTile;
use App\Http\Requests\UpdateTile;

class TileController extends Controller
{
    private $tileservice;
    private $model = 'Tile';

    public function __construct(TileService $service)
    {
        $this->tileservice = $service;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiles = Tile::paginate(15);
        return view('dashboard.tiles.filter',['tiles'=>$tiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all(['id', 'title_en']);
        $tile = New Tile;
        $images = $tile->images;
        $name = 'New';
        return view('dashboard.tiles.create',['tile'=>$tile,'name' => $name,'images'=>$images,'pages'=>$pages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTile $request)
    {
        $tile = $this->tileservice->store($request);

        // Alert::success('Success Title', 'Tile was created successfully!');
        return redirect()->route('tile.show', [$tile])->with('success', 'Tile was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function show(Tile $tile)
    {
        $pages = Page::all(['id', 'title']);
        $images = $tile->background_image;
        // dd($images);
        $name = $tile->name;
        return view('dashboard.tiles.view', ['tile'=>$tile,'name' => $name,'pages'=>$pages,'images'=>$images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function edit(Tile $tile)
    {
        $pages = Page::all(['id', 'title']);
        $images = $tile->images;
        $name = $tile->name;
        return view('dashboard.tiles.edit', ['tile'=>$tile,'name' => $name,'pages'=>$pages,'images'=>$images]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTile $request, Tile $tile)
    {
        $tile = $this->tileservice->update( $tile, $request );
        // Alert::success('Success Title', 'Subpopulation was updated successfully!');
        return redirect()->route('tile.show', [$tile])->with('success', 'Tile was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tile $tile)
    {
        //
    }
}
