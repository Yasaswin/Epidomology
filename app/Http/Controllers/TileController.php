<?php

namespace App\Http\Controllers;

use App\Models\Tile;
use Illuminate\Http\Request;
use App\Services\TileService;


class TileController extends Controller
{
    private $tileService;
    private $model = 'Tile';

    public function __construct(TileService $service)
    {
        $this->tileService = $service;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function show(Tile $tile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function edit(Tile $tile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tile  $tile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tile $tile)
    {
        //
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
