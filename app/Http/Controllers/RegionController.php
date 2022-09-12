<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Location;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::select('*')->paginate(15);

        return view('pages.regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Region::create([
            'name' => $request->name,
            'code' => $request->code
        ]);

        $regions = Region::select('*')->get();

        return view('pages.regions.index', compact('regions'))->with('alert_success', 'The region is created!');
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
        $region = Region::find($id);

        return view('pages.regions.edit', compact('region'));
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
        $region = Region::find($id);

        $region->name = $request->name;
        $region->code = $request->code;
        $region->save();

        $regions = Region::select('*')->limit(10)->get();

        return redirect()->back()->with('alert_success', 'The region was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::where('region_id', $id)->first();

        if(!empty($location)){
            return redirect()->back()->with('alert_danger', 'The region can\'t be deleted, because it\'s being used...');
        }

        Region::destroy($id);

        $regions = Region::select('*')->limit(10)->get();

        return view('pages.regions.index', compact('regions'))->with('alert_success', 'The region was deleted successfully!');
    }
}
