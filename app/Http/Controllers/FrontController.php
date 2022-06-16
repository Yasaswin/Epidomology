<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function history()
    {
        return view('layouts.front.pages.history');
    }

    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function vision()
    {
        return view('layouts.front.pages.vision');
    }

    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function resources()
    {
        return view('layouts.front.pages.resources');
    }

    public function resources2()
    {
        return view('layouts.front.pages.resources2');
    }


    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function resourcesSingle()
    {
        return view('layouts.front.pages.ressingle');
    }

    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function events()
    {
        return view('layouts.front.pages.events');
    }

    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function eventSingle()
    {
        return view('layouts.front.pages.eventsingle');
    }

    /**
     * Display history page.
     *
     * @return Factory|View
     */
    public function gallery()
    {
        return view('layouts.front.pages.gallery');
    }

}
