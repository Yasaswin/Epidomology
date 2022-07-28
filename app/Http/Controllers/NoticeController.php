<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Layout;
use App\Services\NoticeService;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreNotice;
use App\Http\Requests\UpdateNotice;


use Illuminate\Http\Request;

class NoticeController extends Controller
{
    private $noticeservice;
    private $model = 'Notice';

    public function __construct(NoticeService $service)
    {
        $this->noticeservice = $service;

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::paginate(15);
        return view('dashboard.notices.filter',['notices'=>$notices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layouts = DB::table('layouts')->where('mapping', 'NOTICE')->get();
        $notice = New Notice;
        $images = $notice->images;
        $name = 'New';
        return view('dashboard.notices.create',['notice'=>$notice,'name' => $name,'layouts'=>$layouts,'images'=>$images,'details' => []]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotice $request)
    {
        $notice = $this->noticeservice->store($request);

        // Alert::success('Success Title', 'Tile was created successfully!');
        return redirect()->route('notice.show', [$notice])->with('success', 'Notice was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        $layouts = DB::table('layouts')->where('mapping', 'NOTICE')->get();
        $images = $notice->images;
        $name = $notice->name;
        return view('dashboard.notices.view',['notice'=>$notice,'name' => $name,'layouts'=>$layouts,'images'=>$images,'details'=> $notice->details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        // $layouts = Layout::all(['id', 'name']);
        $layouts = DB::table('layouts')->where('mapping', 'NOTICE')->get();
        $images = $notice->images;
        $name = $notice->name;
        return view('dashboard.notices.edit', ['notice'=>$notice,'name' => $name,'layouts'=>$layouts,'images'=>$images,'details'=> $notice->details]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotice $request, Notice $notice)
    {
        $notice = $this->noticeservice->update( $notice, $request );
        // Alert::success('Success Title', 'Subpopulation was updated successfully!');
        return redirect()->route('notice.show', [$notice])->with('success', 'Notice was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        //
    }
}
