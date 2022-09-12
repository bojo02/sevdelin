<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Rate;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::select('*')->paginate(15);

        return view('pages.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('video');
    
        $name =  Str::random(30) . $request->video->getClientOriginalName();
 
        $path = $request->file('video')->storeAs('/videos', $name);
 
        $request->file('video')->move(public_path('videos'), $name);
 
        $video = new Video;
 
        $video->title = $request->title;
        $video->path = $path;
 
        $video->save();

        return redirect(route('video.index'))->with('alert_success', 'The video was uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);

        return view('pages.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::find($id);

        $video->title = $request->title;

        if($request->has('video')){
            $file = $request->file('video');
    
            $name =  Str::random(30) . $request->video->getClientOriginalName();
     
            $path = $request->file('video')->storeAs('/videos', $name);
     
            $request->file('video')->move(public_path('videos'), $name);

            $video->path = $path;
        }

        $video->save();

        return redirect()->back()->with('alert_success', 'The video was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rate = Rate::where('video_id', $id)->first();

        if(!empty($rate)){
            return redirect()->back()->with('alert_danger', 'The video is being used, it can\'t be deleted...');
        }

        Video::destroy($id);

        return redirect(route('video.index'))->with('alert_success', 'The video was deleted!');
    }
}
