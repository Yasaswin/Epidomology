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


}
