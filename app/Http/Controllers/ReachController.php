<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reach;
use App\Models\Text;
use App\Models\Found;
use Illuminate\Support\Str;

class ReachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reaches = Reach::select('*')->paginate(15);

        $status = Text::where('slug', 'popup_status')->first();

        return view('pages.reach.index', compact('reaches', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.reach.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reach = Reach::create([
            'text' => $request->text,
        ]);

        return redirect(route(('reaches.index')))->with('alert_success', 'The option was uploaded!');
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
        $reach = Reach::find($id);

        return view('pages.reach.edit', compact('reach'));
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
        $reach = Reach::find($id);

        $reach->text = $request->text;

        $reach->save();

        return redirect()->back()->with('alert_success', 'The option was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reach::destroy($id);

        return redirect(route(('reaches.index')))->with('alert_success', 'The option was deleted!');
    }

    public function on(){
        $text = Text::where('slug', 'popup_status')->first();

        $text->content = '1';

        $text->save();

        return redirect()->back()->with('alert_success', 'Turned On!');
    }
    public function off(){
        $text = Text::where('slug', 'popup_status')->first();

        $text->content = '0';

        $text->save();

        return redirect()->back()->with('alert_success', 'Turned Off!');
    }

    public function deleteFound(){

    }
    public function indexFound(){

    }
  
    public function storeFound(Request $request){
        Session::put('id_session', Str::random(40));
        
        $reach = new Found;

        $reach->content = $request->content;

        $reach->session_id = session('id_session');

        $reach->save();

        $alert = view('pages.components.alert')->with('alert_success', 'Thanks for the submission!')->render();

        return response()->json(['alert' => $alert]);
    }

    public function destroyAllData(){
        Found::truncate();

        return redirect()->back()->with('alert_success', 'The data was deleted!');
    }
}
