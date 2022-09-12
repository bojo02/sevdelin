<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Video;
use App\Models\Location;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::select('*')->paginate(15);

        return view('pages.rates.index', compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videos = Video::all();

        return view('pages.rates.create', compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rate::create([
            'name' => $request->name,
            'code' => $request->code,
            'video_id' => $request->video_id
        ]);

        return redirect(route('rates.index'))->with('alert_success', 'The rate was created!');
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
        $videos = Video::all();

        $rate = Rate::find($id);

        return view('pages.rates.edit', compact('videos', 'rate'));
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
        $rate = Rate::find($id);
        $rate->name = $request->name;
        $rate->code = $request->code;
        $rate->video_id = $request->video_id;

        $rate->save();

        return redirect()->back()->with('alert_success', 'The location was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::where('rate_id', $id)->first();

        if(!empty($location)){
            return redirect()->back()->with('alert_danger', 'The rate can\'t be deleted, because it\'s being used...');
        }

        Rate::destroy($id);

        return redirect(route('rates.index'))->with('alert_success', 'The rate was deleted successfully!');
    }
}
