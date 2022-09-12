<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Rate;
use App\Models\Region;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::select('*')->paginate(15);

        return view('pages.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rates = Rate::all();

        $regions = Region::all();

        return view('pages.locations.create', compact('rates', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Location::create([
            'name' => $request->name,
            'code' => $request->code,
            'rate_id' => $request->rate_id,
            'region_id' => $request->region_id
        ]);

        return redirect(route('locations.index'))->with('alert_success', 'The location was created successfully!');
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
        $location = Location::find($id);

        $rates = Rate::all();

        $regions = Region::all();

        return view('pages.locations.edit', compact('rates', 'regions', 'location'));
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
        $location = Location::find($id);
        $location->name = $request->name;
        $location->code = $request->code;
        $location->rate_id = $request->rate_id;
        $location->region_id = $request->region_id;

        $location->save();

        return redirect(route('locations.index'))->with('alert_success', 'The location was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::destroy($id);

        return redirect(route('locations.index'))->with('alert_success', 'The region was deleted successfully!');
    }
}
